@extends('layouts.main')

@section('title', 'Create Taxonomy')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div class="max-w-lg mt-4 mx-auto">
            <div class="rounded p-6 lg:px-20 lg:py-10 shadow bg-white">
                <header class="text-center mb-16">
                    <h1 class="mb-6">{{ 'Create Taxonomy' }}</h1>
                    <p class="text-gray">
                        {{ 'A taxonomy is a system of classifying data around a set of unique characteristics, such as categories, tags, or colors.' }}
                    </p>
                </header>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">{{ 'Validation Error!' }}</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">{{ 'Success!' }}</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <form action="{{ route('taxonomies.store') }}" method="POST">
                    @csrf
                    <div class="mb-10">
                        <label for="name" class="font-bold text-base mb-1">{{ 'Title' }}</label>
                        <input type="text" autofocus="autofocus" tabindex="1" class="input-text"
                            value="{{ old('title') }}" placeholder="Enter title" id="title" name="title">
                        <div class="text-2xs text-gray-600 mt-2 flex items-center">
                            {{ 'We recommend using a plural noun, like "Categories" or "Tags".' }}
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="font-bold text-base mb-1">{{ 'Handle' }}</label>
                        <input type="text" tabindex="2" class="input-text" value="{{ old('handle') }}"
                            placeholder="Enter handle" id="handle" name="handle">
                        <div class="text-2xs text-gray-600 mt-2 flex items-center">
                            {{ "Used to reference this taxonomy on the frontend. It's non-trivial to change later." }}
                        </div>
                    </div>
            </div>
            <div class="flex justify-center mt-8">
                <button tabindex="4" class="btn-primary mx-auto btn-lg">
                    {{ 'Create Taxonomy' }}
                </button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#title').on('input', function() {
                var titleValue = $(this).val();
                var handleValue = titleValue.toLowerCase().replace(/[^a-z0-9]+/g, '_');
                $('#handle').val(handleValue);
            });
        });
    </script>
@endsection
