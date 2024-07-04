@extends('layouts.main')

@section('title', $taxonomy->title)

@section('content')
    <div class="page-wrapper max-w-full">
        <header class="mb-6">
            <div class="flex">
                <a href="{{ route('taxonomies.index', ['taxonomy' => $taxonomy->handle]) }}"
                    class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                    <div class="h-6 rotate-180 svg-icon using-svg">
                        <svg viewBox="0 0 24 24" class="align-middle">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg>
                    </div>
                    <span>Taxonomies</span>
                </a>
            </div>
            <div class="flex items-center">
                <h1 class="flex-1">{{ $taxonomy->title }}</h1>
                <div class="dropdown-list inline-block">
                    <div aria-haspopup="true">
                        <a href="{{ route('terms.create', ['taxonomy' => $taxonomy->handle]) }}">
                            <button class="btn-primary flex items-center">
                                <span>{{ 'Create Term' }}</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div>
            <div>
                <div class="card overflow-hidden p-0 relative">
                    <div class="flex flex-wrap items-center justify-between px-2 pb-2 text-sm border-b">
                        <div class="pt-2 rtl:pl-2 ltr:pr-2">
                            <div class="flex flex-wrap items-center">
                                <button class="pill-tab rtl:ml-1 ltr:mr-1 active">All</button>
                                <button class="pill-tab v-popper--has-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                        class="w-3 h-3">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                            d="M7 1v12m6-6H1">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <input type="text" placeholder="Search" autofocus="autofocus"
                            class="input-text flex-1 bg-white text-sm focus:border-blue-300 outline-0 h-8 mt-2 min-w-[240px] w-full">
                        <div class="flex space-x-2 mt-2">
                            <button class="btn btn-sm rtl:mr-2 ltr:ml-2" style="display: none;">Reset</button>
                            <button class="btn btn-sm rtl:mr-2 ltr:ml-2" style="display: none;">Save</button>
                            <div>
                                <button
                                    class="btn py-1 px-1 h-8 w-8 flex items-center justify-center v-popper--has-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z">
                                            </path>
                                            <path
                                                d="M13.414 4.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M14 5.5h6.52m-17 0H10m-.586 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M10 12h10.52m-17 0H6m5.414 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M12 18.5h8.52m-17 0H8">
                                            </path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-inner bg-gray-300">
                        <div class="flex items-center flex-wrap px-3 border-b pt-2">
                            <div class="">
                                <div aria-haspopup="true">
                                    <button class="filter-badge filter-badge-control rtl:ml-2 ltr:mr-2 mb-2"> Field
                                        <svg viewBox="0 0 10 6.5" class="w-2 h-2 mx-2">
                                            <path fill="currentColor" d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-Results p-6 text-center text-gray-500 text-lg italic" style="display: none;">No Results
                    </div>
                    <table data-size="sm" tabindex="0" class="data-table" allow-column-picker="true"
                        column-preferences-key="">
                        <thead>
                            <tr>
                                <th class="checkbox-column">
                                    <label for="checkerOfAllBoxes"
                                        class="flex items-center justify-center relative cursor-pointer">
                                        <input type="checkbox" id="checkerOfAllBoxes" class="checkbox relative top-0">
                                    </label>
                                </th>
                                <th class="group sortable-column">
                                    <span>Title</span>
                                    <svg height="8" width="8" viewBox="0 0 10 6.5"
                                        class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                                        <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor">
                                        </path>
                                    </svg>
                                </th>
                                <th class="group sortable-column">
                                    <span>Slug</span>
                                    <svg height="8" width="8" viewBox="0 0 10 6.5"
                                        class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                                        <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor">
                                        </path>
                                    </svg>
                                </th>
                                <th class="actions-column"></th>
                            </tr>
                        </thead>
                        <tbody tabindex="0">
                            @foreach ($taxonomy->terms as $data)
                                <tr class="sortable-row outline-none" tabindex="0">
                                    <th class="checkbox-column">
                                        <input type="checkbox" id="checkbox-tags::boat" value="tags::boat">
                                    </th>
                                    <td class="">
                                        <div class="flex items-center">
                                            <a
                                                href="{{ route('terms.edit', ['taxonomy' => $data->taxonomy, 'id' => $data->id]) }}">{{ $data->title }}</a>
                                        </div>
                                    </td>
                                    <td class="">
                                        <span class="font-mono text-2xs">{{ $data->slug }}</span>
                                    </td>
                                    <th class="actions-column">
                                        @php
                                            $menuItems = [
                                                [
                                                    'label' => 'Edit',
                                                    'route' => route('terms.edit', [
                                                        'taxonomy' => $data->taxonomy,
                                                        'id' => $data->id,
                                                    ]),
                                                ],
                                                [
                                                    'label' => 'Delete',
                                                    // 'route' => route('terms.destroy', [
                                                    //     'taxonomy' => $data->taxonomy,
                                                    // ]),
                                                    'route' => route('terms.edit', [
                                                        'taxonomy' => $data->taxonomy,
                                                        'id' => $data->id,
                                                    ]),
                                                ],
                                            ];
                                        @endphp
                                        <x-customDropdown :menuItems="$menuItems"></x-customDropdown>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
