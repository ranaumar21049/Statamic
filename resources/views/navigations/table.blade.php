@extends('layouts.main')

@section('title', $navigation->title)

@section('content')
<div class="page-wrapper max-w-xl">
    <div>
        <header class="mb-6">
            <div class="breadcrumb flex">
                <a href="{{ route('navigations.navigations') }}"
                    class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                    <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                    </svg>
                    <span>{{ 'Navigation' }}</span>
                </a>
            </div>
            <div class="flex items-center">
                <h1 class="flex-1">{{ $navigation->title }}</h1>

                <div class="relative">
                    <div class="dropdown relative">
                        <button id="dropdown2" class="btn flex items-center rtl:pl-4 ltr:pr-4">
                            Add Nav Item
                            <svg viewBox="0 0 10 6.5" class="w-2 rtl:mr-4 ltr:ml-4">
                                <path fill="currentColor" d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="dropdown-content2"
                        class="dropdown-content absolute z-1 hidden text-gray-700 pt-1 right-2 mt-1">
                        <div class="bg-white shadow-popover rounded-md w-40" bis_skin_checked="1">
                            <div
                                class="rounded-t hover:bg-blue-500 hover:text-white py-2 px-4 block whitespace-no-wrap border-b">
                                <x-navigation--offcanvas buttonText="Add Nav Item"></x-navigation--offcanvas>
                            </div>
                            <div
                                class="rounded-b hover:bg-blue-500 hover:text-white py-2 px-4 block whitespace-no-wrap">
                                <x-navigation--offcanvas buttonText="Link to Entry"></x-navigation--offcanvas>
                            </div>
                        </div>
                    </div>
                </div>
                <button disabled="disabled" class="btn-primary rtl:mr-4 ltr:ml-4 disabled">Save Changes</button>
            </div>
        </header>
        <div>
            <div class="mb-2 flex justify-end"><a class="text-2xs text-blue rtl:ml-4 ltr:mr-4 underline">Expand
                    All</a><a class="text-2xs text-blue rtl:ml-2 ltr:mr-2 underline">Collapse All</a></div>

            <div class="page-tree w-full">
                <div class="he-tree tree">
                    <div id="tree_93_node_root" class="tree-node">

                        <div class="tree-node-children">
                            <div id="tree_93_node_XyP4J" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <x-navigation--offcanvas buttonText="Neat Guy"></x-navigation--offcanvas>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">

                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list mr-1 ml-8 relative"
                                                        x-data="{ isOpen: false }">
                                                        <div aria-haspopup="true" class="dropdown-toggle cursor-pointer"
                                                            @click="isOpen = !isOpen">
                                                            <button aria-label="Open Dropdown"
                                                                class="rotating-dots-button">
                                                                <svg width="12" viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current transition-transform transform"
                                                                    :class="{ 'rotate-90': isOpen }">
                                                                    <circle cx="3" cy="12" r="3"></circle>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                    <circle cx="21" cy="12" r="3"></circle>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown-content absolute z-1 top-8 right-0 w-48 bg-white border border-gray-300 rounded-md shadow-md"
                                                            x-show="isOpen" @click.away="isOpen = false">
                                                            <ul>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white rounded-t"><x-navigation--offcanvas buttonText="Add child nav item"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white"><x-navigation--offcanvas buttonText="Add child link to entry"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-red-700 hover:bg-red-500 hover:text-white rounded-b"><x-navigation--offcanvas buttonText="Remove"></x-navigation--offcanvas></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="tree_93_node_f6Nr9" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <x-navigation--offcanvas buttonText="Neat CMS"></x-navigation--offcanvas>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list mr-1 ml-8 relative"
                                                        x-data="{ isOpen: false }">
                                                        <div aria-haspopup="true" class="dropdown-toggle cursor-pointer"
                                                            @click="isOpen = !isOpen">
                                                            <button aria-label="Open Dropdown"
                                                                class="rotating-dots-button">
                                                                <svg width="12" viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current transition-transform transform"
                                                                    :class="{ 'rotate-90': isOpen }">
                                                                    <circle cx="3" cy="12" r="3"></circle>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                    <circle cx="21" cy="12" r="3"></circle>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown-content absolute z-1 top-8 right-0 w-48 bg-white border border-gray-300 rounded-md shadow-md"
                                                            x-show="isOpen" @click.away="isOpen = false">
                                                            <ul>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white rounded-t"><x-navigation--offcanvas buttonText="Add child nav item"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white"><x-navigation--offcanvas buttonText="Add child link to entry"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-red-700 hover:bg-red-500 hover:text-white rounded-b"><x-navigation--offcanvas buttonText="Remove"></x-navigation--offcanvas></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="tree_93_node_cPjqN" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <x-navigation--offcanvas buttonText="Neat Walk"></x-navigation--offcanvas>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list mr-1 ml-8 relative"
                                                        x-data="{ isOpen: false }">
                                                        <div aria-haspopup="true" class="dropdown-toggle cursor-pointer"
                                                            @click="isOpen = !isOpen">
                                                            <button aria-label="Open Dropdown"
                                                                class="rotating-dots-button">
                                                                <svg width="12" viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current transition-transform transform"
                                                                    :class="{ 'rotate-90': isOpen }">
                                                                    <circle cx="3" cy="12" r="3"></circle>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                    <circle cx="21" cy="12" r="3"></circle>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropdown-content absolute z-1 top-8 right-0 w-48 bg-white border border-gray-300 rounded-md shadow-md"
                                                            x-show="isOpen" @click.away="isOpen = false">
                                                            <ul>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white rounded-t"><x-navigation--offcanvas buttonText="Add child nav item"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-gray-700 hover:bg-blue-500 hover:text-white"><x-navigation--offcanvas buttonText="Add child link to entry"></x-navigation--offcanvas></a></li>
                                                                <li><a href="#" class="block px-4 py-2 text-xs text-red-700 hover:bg-red-500 hover:text-white rounded-b"><x-navigation--offcanvas buttonText="Remove"></x-navigation--offcanvas></a></li>
                                                            </ul>
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
        <div class="relationship-input hidden relationship-input-empty">


            <div class="relationship-input-items space-y-1 outline-none"></div>

            <div class="relationship-input-buttons relative @container">
                <div class="flex flex-wrap items-center text-sm -mb-2">
                    <div class="relative mb-2">

                    </div><button class="text-blue hover:text-gray-800 flex items-center mb-2 outline-none"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="rtl:ml-1 ltr:mr-1 h-4 w-4 flex items-center">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                            </path>
                        </svg><span class="hidden @sm:block">Link Existing Item</span><span
                            class="@sm:hidden">Link</span></button>
                </div>
            </div>
            <input type="hidden" name="entries" value="[]">
        </div>

    </div>
</div>
@endsection