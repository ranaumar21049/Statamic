@extends('layouts.main')

@section('title', 'Create Global')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div class="max-w-lg mt-4 mx-auto">
            <div class="rounded p-6 lg:px-20 lg:py-10 shadow bg-white">
                <header class="text-center mb-16">
                    <h1 class="mb-6">Create Global Set</h1>
                    <p class="text-gray">A global set is a group of variables available across all front-end pages.</p>
                </header>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                         role="alert">
                        <strong class="font-bold">Validation Error!</strong>
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
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <form action="{{ route('globals.store') }}" method="POST">
                    @csrf
                    <div class="mb-10"><label for="name" class="font-bold text-base mb-1">Title</label><input
                                type="text"
                                autofocus="autofocus" tabindex="1" class="input-text" value="{{ old('title') }}"
                                placeholder="Enter title"
                                id="title" name="title">
                        <div class="text-2xs text-gray-600 mt-2 flex items-center"> We recommend a noun representing the
                            set's
                            contents. eg. "Brand" or "Company"
                        </div>
                    </div>
                    <div class="mb-4"><label for="name" class="font-bold text-base mb-1">Handle</label><input
                                type="text"
                                tabindex="2" class="input-text" value="{{ old('handle') }}"
                                placeholder="Enter handle"
                                id="handle" name="handle" readonly>
                        <div class="text-2xs text-gray-600 mt-2 flex items-center"> Used to reference this global set on
                            the
                            frontend. It's non-trivial to change later.
                        </div>
                    </div>
            </div>
            <div class="flex justify-center mt-8">
                <button tabindex="4"
                        class="btn-primary mx-auto btn-lg"> Create Global Set
                </button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#title').on('input', function () {
                var titleValue = $(this).val();
                var handleValue = titleValue.toLowerCase().replace(/[^a-z0-9]+/g, '_');
                $('#handle').val(handleValue);
            });
        });
    </script>
@endsection
