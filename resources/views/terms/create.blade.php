@extends('layouts.main')
@section('title', 'Create Term')
@section('content')
    <div class="page-wrapper max-w-3xl">
        <div>
            <form id="myForm" method="POST" action="{{ route('terms.store', ['taxonomy' => $taxonomy->handle]) }}">
                @csrf
                <div class="breadcrumb flex">
                    <a href="{{ route('terms.index', ['taxonomy' => $taxonomy->handle]) }}"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                        <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg>
                        <span>{{ $taxonomy->title }}</span>
                    </a>
                </div>
                <div class="flex items-center mb-6">
                    <h1 class="flex-1">
                        <div class="flex items-center">
                            <span class="little-dot rtl:ml-2 ltr:mr-2 published v-popper--has-tooltip"></span>
                            <span>{{ 'Create Term' }}</span>
                        </div>
                    </h1>
                    <div class="hidden md:flex items-center">
                        <div class="btn-group">
                            <button type="submit" id="saveEntry" class="btn-primary">Save &amp; Publish</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <div>
                            <div>
                                <div class="tabs-container flex items-center">
                                    <div role="tablist" aria-label="Edit Content" class="publish-tabs tabs">
                                        <button role="tab" id="MainTab" aria-controls="MainTabPanel" tabindex="0"
                                            class="tab-button" aria-selected="true">Main</button>
                                        <button role="tab" id="SEOTab" aria-controls="SEOTabPanel" tabindex="-1"
                                            class="tab-button">SEO</button>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                        role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                        role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="publish-tab-outer">
                                    <div class="publish-tab-wrapper w-full min-w-0">
                                        <div id="MainTabPanel" class="tab-panel active">
                                            <div class="publish-sections">
                                                <div class="publish-sections-section">
                                                    <div class="p-0 card">
                                                        <div class="publish-fields @container">
                                                            <div
                                                                class="form-group publish-field publish-field__title text-fieldtype w-full">
                                                                <div class="field-inner"><label for="field_title"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                                            class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                        <button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                        <button class="outline-none" style="display: none;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <div class="input-group">
                                                                        <input id="field_title" name="title"
                                                                            type="text" autofocus="autofocus"
                                                                            class="input-text" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-group publish-field publish-field__content markdown-fieldtype w-full">
                                                                <div class="field-inner"><label for="field_content"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Content</span>
                                                                        <button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                        <button class="outline-none" style="display: none;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <textarea name="content" id="editor"></textarea>
                                                                </div><!----><!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="SEOTabPanel" class="tab-panel">
                                            <div class="publish-sections">
                                                <div class="publish-sections-section">
                                                    <div class="p-0 card"><!---->
                                                        <div class="publish-fields @container">
                                                            <div
                                                                class="form-group publish-field publish-field__seo seo_pro-fieldtype w-full">
                                                                <div class="field-inner"><label for="field_seo"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">SEO</span>
                                                                        <button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg></button><button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg></button></label><!----></div><!---->
                                                                <div class="publish-fields">
                                                                    <div
                                                                        class="form-group form-group publish-field publish-field__enabled toggle-fieldtype w-full">
                                                                        <div class="field-inner">
                                                                            <input type="hidden" name="enableState"
                                                                                id="enableState">
                                                                            <label for="field_enabled"
                                                                                class="publish-field-label"><span
                                                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enabled</span>
                                                                                <button class="outline-none"
                                                                                    style="display: none;"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                        <path fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                        </path>
                                                                                    </svg></button><button
                                                                                    class="outline-none"
                                                                                    style="display: none;"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                        <path fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                        </path>
                                                                                    </svg></button></label>
                                                                            <div class="help-block -mt-2">
                                                                                <p>Disabling this item will exclude it from
                                                                                    reports and the sitemap, and prevent
                                                                                    anything from being rendered through the
                                                                                    template tag.</p>
                                                                            </div>
                                                                        </div><!---->
                                                                        <div class="toggle-fieldtype-wrapper"><button
                                                                                type="button" aria-pressed="true"
                                                                                aria-label="Toggle Button"
                                                                                class="toggle-container on"
                                                                                id="field_enabled">
                                                                                <div class="toggle-slider">
                                                                                    <div tabindex="0"
                                                                                        class="toggle-knob">
                                                                                    </div>
                                                                                </div>
                                                                            </button><!----></div><!----><!---->
                                                                    </div>
                                                                </div><!----><!---->
                                                            </div>
                                                        </div>
                                                        <div class="mt-4" id="inputContainer">
                                                            <!-- Input sets will be dynamically added here -->
                                                        </div>
                                                        <button
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4"
                                                            id="addMoreTags">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="publish-sidebar">
                                        <div class="publish-tab">
                                            <div class="publish-sections">
                                                <div class="publish-sections-section">
                                                    <div class="p-0 card">
                                                        <div class="publish-fields @container">
                                                            <div
                                                                class="form-group publish-field publish-field__slug slug-fieldtype w-full">
                                                                <div class="field-inner"><label for="field_slug"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slug</span>
                                                                        <button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg></button><button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <div class="flex items-center">
                                                                        <div class="input-group">
                                                                            <input id="field_slug" name="slug"
                                                                                type="text"dir="ltr"
                                                                                class="input-text font-mono text-xs"
                                                                                value="" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const submitFormUrl = "{{ route('terms.create', ['taxonomy' => $taxonomy->handle]) }}";
    </script>
    <script src="{{ url('js/terms.js') }}"></script>

@endsection
