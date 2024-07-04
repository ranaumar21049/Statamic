@extends('layouts.main')

@section('title', 'Edit Fieldsets')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <header class="mb-6">
                <div class="breadcrumb flex"><a href="{{ route('fieldsets.index') }}"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                            viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg><span>Fieldsets</span></a></div>
                <div class="flex items-center justify-between">
                    <h1>{{ $fieldset->title }}</h1><button type="submit" form="editFieldsetForm"
                        class="btn-primary">Save</button>
                </div>
            </header>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="publish-form card p-0 @container mb-8">
                <div class="publish-fields">
                    <div class="form-group w-full">
                        <div class="field-inner"><label class="block">Title</label><small class="help-block -mt-2">Usually
                                describes what fields will be inside, like Image Block or Meta Data</small>
                        </div>
                        <div>
                            <form id="editFieldsetForm" action="{{ route('fieldsets.update', $fieldset->handle) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="title" autofocus="autofocus" class="input-text"
                                    value="{{ $fieldset->title }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-10 mb-4">
                <h2>Fields</h2>
            </div>
            <div class="card pt-2">
                <div class="flex mt-2 -mx-1">
                    <div class="px-1">
                        <x-fieldset--offcanvas buttonText="Link Existing"></x-fieldset--offcanvas>
                    </div>
                    <div class="px-1">
                        <x-fieldset-widemodel buttonText="Create Field"></x-fieldset-widemodel>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
