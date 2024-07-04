
@extends('layouts.main')

@section('title', $entry->title)

@section('content')
    <div class="page-wrapper max-w-3xl">
        <div>
            <form id="myForm" method="POST"
                action="{{ route('entries.update', ['collection' => $entry->collection, 'id' => $entry->id]) }}">
                @csrf
                @method('put')
                <div class="breadcrumb flex">
                    <a href="{{ route('entries.index', ['collection' => $entry->collection]) }}"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                        <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg>
                        <span>{{ $collection_taxonomy->title }}</span>
                    </a>
                </div>
                <div class="flex items-center mb-6">
                    <h1 class="flex-1">
                        <div class="flex items-center"><span
                                class="little-dot rtl:ml-2 ltr:mr-2 published v-popper--has-tooltip"></span><span>{{ $entry->title }}</span>
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
                                                                            class="input-text" value="{{ $entry->title }}">
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
                                                                    <textarea name="content" id="editor">{{ json_decode($entry->data)->content }}</textarea>
                                                                </div><!----><!---->
                                                            </div>
                                                            <div
                                                                class="form-group publish-field publish-field__author relationship-fieldtype w-full">
                                                                <div class="field-inner"><label for="field_author"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Author</span>
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
                                                                <div class="relationship-input">
                                                                    <div data-v-c80a132c="">
                                                                        <div data-v-c80a132c="" dir="auto"
                                                                            class="v-select vs--single vs--searchable">
                                                                            <select name="author" id="author"
                                                                            class="w-full p-2 border-2 border-gray-500 rounded-md text-md hover:border-sky-500">
                                                                            <option selected disabled hidden value="{{ json_decode($entry->data)->author }}">{{ json_decode($entry->data)->author }}</option>
                                                                                
                                                                                @foreach ($users as $user)
                                                                                    <option value="{{ $user->name }}">
                                                                                        {{ $user->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                                <!-- Add other options as needed -->
                                                                            </select>
                                                                            <ul id="vs14__listbox" role="listbox"
                                                                                style="display: none; visibility: hidden;">
                                                                            </ul>
                                                                        </div>
                                                                    </div><!----><!---->
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
                                                                <div class="field-inner">
                                                                    <input type="hidden" name="enableState"
                                                                        id="enableState">
                                                                    <label for="field_enabled"
                                                                        class="publish-field-label">
                                                                        <span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enabled</span>
                                                                        <button class="outline-none"
                                                                            style="display: none;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
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
                                                                        <button class="outline-none"
                                                                            style="display: none;">
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
                                                                    <div class="help-block -mt-2">
                                                                        <p>{{ 'Disabling this item will exclude it from reports and the sitemap, and prevent anything from being rendered through the template tag.' }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="toggle-fieldtype-wrapper"><button
                                                                        type="button" aria-pressed="true"
                                                                        aria-label="Toggle Button"
                                                                        class="toggle-container {{ $entry->isSEOEnabled == 1 ? 'on' : 'off' }} "
                                                                        id="field_enabled">
                                                                        <div class="toggle-slider">
                                                                            <div tabindex="0" class="toggle-knob">
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                </div>
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
                                            <div class="publish-tab-actions as-sidebar">
                                                <div>
                                                    <div class="card p-0 mb-5">
                                                        <div class="flex items-center justify-between px-4 py-2 border-t">
                                                            <input type="hidden" name="publishState" id="publishState">
                                                            <label
                                                                class="publish-field-label font-medium">Published</label>
                                                            <button id="field_publish" type="button" aria-pressed="true"
                                                                aria-label="Toggle Button"
                                                                class="toggle-container {{ $entry->published == 1 && $entry->status == 'published' ? 'on' : 'off' }}">
                                                                <div class="toggle-slider">
                                                                    <div tabindex="0" class="toggle-knob"></div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                                value="{{ $entry->slug }}" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if (!$taxonomyTerms->isEmpty())
                                                                    @foreach ($taxonomyTerms as $taxonomy)
                                                                        @php
                                                                            $taxonomyHandle = $taxonomy['handle'];
                                                                            $defaultValues = json_decode($entry->data)->taxonomies->$taxonomyHandle;
                                                                        @endphp
                                                                        <div class="mt-4">
                                                                            <select x-cloak id="{{ $taxonomyHandle }}">
                                                                                {{-- <span>{{ $taxonomy->handle }}</span> --}}
                                                                                @foreach ($taxonomy['terms'] as $term)
                                                                                    <option value="{{ $term->slug }}">
                                                                                        {{ $term->title }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            <div x-data="dropdown('{{ $taxonomyHandle }}', '{{ $defaultValues }}')"
                                                                                x-init="loadOptions('{{ $taxonomyHandle }}')" class="w-full">
                                                                                <input name="{{ $taxonomyHandle }}"
                                                                                    type="hidden"
                                                                                    x-bind:value="selectedValues()">
                                                                                <div class="inline-block relative w-full">
                                                                                    <div
                                                                                        class="flex flex-col items-center relative">
                                                                                        <div x-on:click="open"
                                                                                            class="w-full  svelte-1l8159u">
                                                                                            <div
                                                                                                class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                                                                                                <div
                                                                                                    class="flex flex-auto flex-wrap px-1">
                                                                                                    <template
                                                                                                        x-for="(option,index) in selected"
                                                                                                        :key="options[
                                                                                                                option
                                                                                                            ]
                                                                                                            .value">
                                                                                                        <div
                                                                                                            class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                                                                                                            <div class="text-xs font-normal leading-none max-w-full flex-initial"
                                                                                                                x-model="options[option]"
                                                                                                                x-text="options[option].text">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="flex flex-auto flex-row-reverse mt-1.5 ml-1 border-l">
                                                                                                                <div
                                                                                                                    x-on:click="remove(index,option)">
                                                                                                                    <svg class="fill-current h-4 w-4"
                                                                                                                        role="button"
                                                                                                                        viewBox="0 0 20 20">
                                                                                                                        <path
                                                                                                                            d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15 C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                                                                        z
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </template>
                                                                                                    <div x-show="selected.length == 0"
                                                                                                        class="flex-1">
                                                                                                        <input
                                                                                                            placeholder="Select a option"
                                                                                                            class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                                                                                            x-bind:value="selectedValues
                                                                                                                ()">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                                                                                    <button type="button"
                                                                                                        x-show="isOpen() === true"
                                                                                                        x-on:click="open"
                                                                                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                                                                        <svg version="1.1"
                                                                                                            class="fill-current h-4 w-4"
                                                                                                            viewBox="0 0 20 20">
                                                                                                            <path
                                                                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z" />
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                        x-show="isOpen() === false"
                                                                                                        @click="close"
                                                                                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                                                                        <svg class="fill-current h-4 w-4"
                                                                                                            viewBox="0 0 20 20">
                                                                                                            <path
                                                                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z" />
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="w-full px-4">
                                                                                            <div x-show.transition.origin.top="isOpen()"
                                                                                                class="relative shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj"
                                                                                                x-on:click.away="close">
                                                                                                <div
                                                                                                    class="flex flex-col w-full">
                                                                                                    <template
                                                                                                        x-for="(option,index) in options"
                                                                                                        :key="option">
                                                                                                        <div>
                                                                                                            <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100"
                                                                                                                @click="select(index,$event)">
                                                                                                                <div x-bind:class="option
                                                                                                                    .selected ?
                                                                                                                    'border-teal-600' :
                                                                                                                    ''"
                                                                                                                    class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                                                    <div
                                                                                                                        class="w-full items-center flex">
                                                                                                                        <div class="mx-2 leading-6"
                                                                                                                            x-model="option"
                                                                                                                            x-text="option.text">
                                                                                                                            {{ 'this is for checking' }}
                                                                                                                        </div>
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
                                                                    @endforeach
                                                                @endif
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
    @php
        $metaData = json_decode($entry->data)->metaData ?? false;
    @endphp
    <script>
        const submitFormUrl = "{{ route('entries.update', ['collection' => $entry->collection, 'id' => $entry->id]) }}";
        const existingMetaData = {!! json_encode($metaData) !!};
    </script>
    <script src="{{ url('js/entries.js') }}"></script>

    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <script>
        function dropdown(taxonomy, defaultValues = []) {
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
                loadOptions(taxonomy) {
                    const options = document.getElementById(taxonomy).options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                                'selected') : false
                        });
                    }
                    const defaultValuesArray = defaultValues.split(',');
                    // Iterate over the array
                    defaultValuesArray.forEach((value) => {
                        // Find index of the option with the value
                        const optionIndex = this.options.findIndex(option => option.value === value.trim());

                        // If option found, mark it as selected
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
            }
        }
    </script>

@endsection
