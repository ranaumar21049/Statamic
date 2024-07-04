@php
    $menuItems = [
        ['label' => 'view', 'route' => route('dashboard')],
        ['label' => 'delete', 'route' => route('dashboard')],
    ];

    // Decode the collection settings
    $settings = json_decode($collection->settings, true); // Decode as associative array for easier access

    // Check if the 'publish' key exists and is a valid boolean value
    $publishStatus = isset($settings['publish']) ? $settings['publish'] : false;
    $slugStatus = isset($settings['slug']) ? $settings['slug'] : false;
    $linkStatus = isset($settings['entry_link']) ? $settings['entry_link'] : false;
    $orderStatus = isset($settings['orderable']) ? $settings['orderable'] : false;
    $savedTaxonomies = $settings['taxonomies'] ?? [];
    $savedTaxonomiesJson = json_encode($savedTaxonomies);
    

@endphp

@extends('layouts.main')

@section('title', 'Edit Collection')

@section('content')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <form id="myForm" action="{{ route('collections.update', $collection->handle) }}"
                method="POST">
                @csrf
                @method('PUT')
            <header class="mb-6">
                <div class="breadcrumb flex"><a href="{{ route('entries.index', ['collection' => $collection->handle]) }}" class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                            viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg><span>{{ $collection->title }}</span></a></div>
                <div class="flex items-center">
                    <h1 class="flex-1">Configure Collection</h1><button type="submit" class="btn-primary" form="myForm">Save</button>
                </div>
            </header>
            <div>
                <div>
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
                    <div class="mb-2 content">
                        <h2 class="text-base">Name</h2>
                        <p></p>
                    </div>
                    <div>

                       
                        
                            <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                            <div class="field-inner"><label for="field_title"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                        class="required rtl:ml-1 ltr:mr-1">*</i><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>We recommend a plural noun, like "Articles" or "Products".</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="input-group"><input id="field_title" name="title"
                                                        type="text" autofocus="autofocus" class="input-text"
                                                        value="{{ $collection->title }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    
                    </div>
                 </div>
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Dates &amp; Behaviors</h2>
                        <p></p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__structured toggle-fieldtype w-full">
                                           
                                            <div class="field-inner">
                                                <input type="hidden" name="orderable" id="orderable">
                                                <label for="field_structured"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Orderable</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Enable manual ordering via drag &amp; drop.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper">

                                                <button type="button"
                                                    aria-pressed="{{ $orderStatus ? 'true' : 'false' }}" aria-label="Toggle Button" class="toggle-container {{ $orderStatus ? 'on' : 'off' }}"
                                                    id="fieldOrderable">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div class="form-group publish-field publish-field__sort_direction select-fieldtype w-full">
                                            <div class="field-inner">
                                                <label for="field_sort_direction" class="publish-field-label">
                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sort Direction</span>
                                                </label>
                                                <div class="help-block -mt-2">
                                                    <p>The default sort direction.</p>
                                                </div>
                                            </div>
                                            <div data-v-288ded3d="" class="flex">
                                                <div data-v-288ded3d="" dir="auto" class="v-select flex-1 vs--single vs--searchable" name="sort_direction">
                                                    <select id="field_sort_direction" name="sort_direction" class="w-full p-2 border-2 border-gray-500 rounded-md text-md hover:border-sky-500">
                                                        <option value="Ascending">{{ json_decode($collection->settings)->sort_dir }}</option>
                                                        <option value="Descending">Descending</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group publish-field publish-field__max_depth integer-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_max_depth"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Max
                                                        Depth</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Set a maximum number of levels page may be nested. Leave blank for no
                                                        limit.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="input-group"><input id="field_max_depth" name="max_depth"
                                                        type="number" class="input-text"></div>
                                            </div>
                                        </div>
                                        <div class="form-group publish-field publish-field__expects_root toggle-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_expects_root"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Expect a root
                                                        page</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Consider the first page in the tree a "root" or "home" page.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button"
                                                    class="toggle-container" id="field_expects_root">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div class="form-group publish-field publish-field__show_slugs toggle-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_show_slugs"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slugs</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Whether to display slugs in the tree view.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button"
                                                    class="toggle-container" id="field_show_slugs">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Content Model</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        
                                        <div class="form-group publish-field publish-field__links toggle-fieldtype w-full">
                                            <div class="field-inner">
                                                <input type="hidden" name="links" id="links">
                                                <label for="field_links"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Links</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Entries in this collection may contain links (redirects) to other
                                                        entries or URLs.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper">
            
                                                <button type="button"
                                                    aria-pressed="{{ $linkStatus ? 'true' : 'false' }}" aria-label="Toggle Button"
                                                    class="toggle-container {{ $linkStatus ? 'on' : 'off' }}" id="field_links">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__taxonomies relationship-fieldtype w-full">
                                            <div class="field-inner"><label for="field_taxonomies"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Taxonomies</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Connect entries in this collection to taxonomies. Fields will be
                                                        automatically added
                                                        to publish forms.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <select x-cloak id="select">
                                                    @foreach ($taxonomies as $taxonomie)
                                                        <option value="{{ $taxonomie->handle }}">
                                                            {{ $taxonomie->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            
                                                <div x-data="dropdown({{ $savedTaxonomiesJson }})" x-init="loadOptions()" class="w-full">
                                                    <input name="taxonomies" type="hidden" x-bind:value="selectedValues()">
                                                    <div class="inline-block relative w-full">
                                                        <div class="flex flex-col items-center relative">
                                                            <div x-on:click="open" class="w-full svelte-1l8159u">
                                                                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                                                    <div class="flex flex-auto flex-wrap px-1">
                                                                        <template x-for="(option, index) in selected" :key="options[option].value">
                                                                            <div class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-teal-700 bg-teal-100 border border-teal-300">
                                                                                <div class="text-xs font-normal leading-none max-w-full flex-initial" x-model="options[option]" x-text="options[option].text"></div>
                                                                                <div class="flex flex-auto flex-row-reverse mt-1.5 ml-1 border-l">
                                                                                    <div x-on:click="remove(index, option)">
                                                                                        <svg class="fill-current h-4 w-4" role="button" viewBox="0 0 20 20">
                                                                                            <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15 C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                        <div x-show="selected.length == 0" class="flex-1">
                                                                            <input placeholder="Select a option" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                                                                        <button type="button" x-show="isOpen()" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                                            <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                                                <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z" />
                                                                            </svg>
                                                                        </button>
                                                                        <button type="button" x-show="!isOpen()" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                                                <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-full px-4">
                                                                <div x-show.transition.origin.top="isOpen()" class="relative shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj" x-on:click.away="close">
                                                                    <div class="flex flex-col w-full">
                                                                        <template x-for="(option, index) in options" :key="option">
                                                                            <div>
                                                                                <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100" @click="select(index, $event)">
                                                                                    <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                        <div class="w-full items-center flex">
                                                                                            <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__default_publish_state toggle-fieldtype w-full">
                                            <div class="field-inner">
                                                <input type="hidden" name="publishState" id="publishState">
                                                <label for="field_default_publish_state"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Publish by
                                                        Default</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>While creating new entries in this collection the published toggle
                                                        will default to
                                                        <strong>true</strong> instead of <strong>false</strong> (draft).
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper">
                                                <button type="button"
                                                    aria-pressed="{{ $publishStatus ? 'true' : 'false' }}" aria-label="Toggle Button"
                                                    class="toggle-container {{ $publishStatus ? 'on' : 'off' }}" id="field_default_publish_state">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__title_formats collection_title_formats-fieldtype w-full">
                                            <div class="field-inner"><label for="field_title_formats"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title
                                                        Format</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Set this to have the entries in this collection generate their titles
                                                        automatically.
                                                        Learn more in the <a target="_blank"
                                                            href="https://statamic.dev/collections#titles">documentation</a>.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="flex items-center slug-field" dir="ltr">
                                                        <div class="input-group"><input type="text"
                                                                class="input-text"  name="title_format" value="{{ json_decode($collection->settings)->title_formats }}"></div>

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
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Routing &amp; URLs</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__routes collection_routes-fieldtype w-full">
                                            <div class="field-inner"><label for="field_routes"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Route</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>The route controls entries URL pattern. Learn more in the <a
                                                            target="_blank"
                                                            href="https://statamic.dev/collections#routing">documentation</a>.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="flex items-center slug-field" dir="ltr">
                                                        <div class="input-group"><input type="text" name="route_name"
                                                                class="input-text" value="{{ json_decode($collection->settings)->route }}"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__require_slugs toggle-fieldtype w-full">
                                            <div class="field-inner">
                                                <input type="hidden" name="slugState" id="slugState">
                                                <label for="field_require_slugs"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Require
                                                        Slugs</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Whether entries are required to have slugs.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper">
                                                <button type="button"
                                                    aria-pressed="{{ $slugStatus ? 'true' : 'false' }}" aria-label="Toggle Button"
                                                    class="toggle-container {{ $slugStatus ? 'on' : 'off' }}" id="field_require_slugs">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button>
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
    </div>

    <script>
        $('#myForm').submit(function() {
            event.preventDefault();
            let isOrderable = $('#fieldOrderable').attr('aria-pressed');
            $('#orderable').val(isOrderable === 'true' ? 1 : 0);

            let isLinks = $('#field_links').attr('aria-pressed');
            $('#links').val(isLinks === 'true' ? 1 : 0);
            
            let ispublishstate = $('#field_default_publish_state').attr('aria-pressed');
            $('#publishState').val(ispublishstate === 'true' ? 1 : 0);
            
            let isslugstate = $('#field_require_slugs').attr('aria-pressed');
            $('#slugState').val(isslugstate === 'true' ? 1 : 0);


            
            $(this).unbind('submit').submit();
        });


    


       function dropdown(defaultValues = []) {
    return {
        options: [],
        selected: [],
        show: false,
        open() {
            this.show = true;
        },
        close() {
            this.show = false;
        },
        isOpen() {
            return this.show === true;
        },
        select(index, event) {
            if (!this.options[index].selected) {
                this.options[index].selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);
            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false;
            }
        },
        remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
        },
        loadOptions() {
            const options = document.getElementById('select').options;
            for (let i = 0; i < options.length; i++) {
                this.options.push({
                    value: options[i].value,
                    text: options[i].innerText,
                    selected: options[i].getAttribute('selected') != null
                });
            }

            // Handle default values
            const defaultValuesArray = defaultValues;
            defaultValuesArray.forEach((value) => {
                const optionIndex = this.options.findIndex(option => option.value === value.trim());
                if (optionIndex !== -1) {
                    this.options[optionIndex].selected = true;
                    this.selected.push(optionIndex);
                }
            });
        },
        selectedValues() {
            return this.selected.map((option) => {
                return this.options[option].value;
            });
        }
    };
}

    </script>
@endsection

