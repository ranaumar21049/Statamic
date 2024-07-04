@extends('layouts.main')

@section('title', 'Create Fieldsets')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div class="max-w-lg mt-4 mx-auto">
            <div class="rounded p-6 lg:px-20 lg:py-10 shadow bg-white">
                <header class="text-center mb-16">
                    <h1 class="mb-6">Create Fieldset</h1>
                    <p class="text-gray">Fieldsets are simple, flexible, and completely optional groupings of fields that
                        help to organize reusable, pre-configured fields.</p>
                </header>
                <form action="{{ route('fieldsets.store') }}" method="POST">
                    @csrf
                    <div class="mb-10">
                        <label for="title" class="font-bold text-base mb-1">Title</label>
                        <input type="text" autofocus="autofocus" tabindex="1" class="input-text" id="title"
                            name="title">
                        <div class="text-2xs text-gray-600 mt-2 flex items-center">Usually describes what fields will be
                            inside, like Image Block or Meta Data</div>
                    </div>
                    <div class="mb-4">
                        <label for="handle" class="font-bold text-base mb-1">Handle</label>
                        <input type="text" tabindex="2" class="input-text" id="handle" name="handle" readonly>
                        <div class="text-2xs text-gray-600 mt-2 flex items-center">Used to reference this fieldset
                            elsewhere. It's non-trivial to change later.</div>
                    </div>
            </div>
            <div class="flex justify-center mt-8">
                <button tabindex="4" type="submit" class="btn-primary mx-auto btn-lg">Create Fieldset</button>
            </div>
            </form>
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
