@extends('layouts.main')

@section('title', 'Configure Global Set')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <header class="mb-6">
                <div class="breadcrumb flex">
                    <a href="http://127.0.0.1:8000/cp/globals"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                        <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg>
                        <span>Globals</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <h1 class="flex-1">{{ $global->title }}</h1>
                    <!---->
                    <div class="dropdown-list rtl:ml-2 ltr:mr-2">
                        <div aria-haspopup="true">
                            <button aria-label="Open Dropdown" class="rotating-dots-button">
                                <svg width="12" viewBox="0 0 24 24" class="rotating-dots fill-current">
                                    <circle cx="3" cy="12" r="3"></circle>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <circle cx="21" cy="12" r="3"></circle>
                                </svg>
                            </button>
                        </div>
                        <div class="v-portal" style="display: none"></div>
                    </div>
                    <!---->
                    <button disabled="disabled" class="btn-primary min-w-100 opacity-25">
                        Save
                    </button>
                </div>
            </header>
            <div class="text-center mt-10 border-2 border-dashed rounded-lg px-8 py-32">
                <div class="max-w-md mx-auto opacity-50">
                    <h1 class="my-6">This Global Set has no fields.</h1>
                    <p>
                        You can add fields to the Blueprint, or you can manually add
                        variables to the set itself.
                    </p>
                </div>
            </div>
            <!---->
        </div>
    </div>
@endsection
