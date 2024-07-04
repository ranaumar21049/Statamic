@extends('layouts.main')

@section('title', 'Collections')

@section('content')
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center justify-between mb-6" bis_skin_checked="1">
            <h1>{{ 'Collections' }}</h1>
            @role('superadmin')
                <a href="{{ route('collections.create') }}" class="btn-primary">Create Collection</a>
            @endrole
        </div>
        <div class="card p-0" endpoints="" bis_skin_checked="1">
            @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Critical Error!</strong>
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
            <table data-size="sm" tabindex="0" class="data-table">
                {{-- Head content goes here --}}
                <x-table-head :columns="$columns" />

                <tbody tabindex="0">
                    @foreach ($collectionsInfo as $collection)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td class="">
                                <a href="{{ route('entries.index', ['collection' => $collection->handle]) }}">

                                    {{ $collection->title }}
                                </a>
                            </td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="entries" values="" class="" bis_skin_checked="1">
                                        {{ $collection->entries_count }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    @php
                                        $menuItems = [
                                            [
                                                'label' => 'View',
                                                'route' => route('entries.index', [
                                                    'collection' => $collection->handle,
                                                ]),
                                            ],
                                            [
                                                'label' => 'Visit URL',
                                                'route' => route('dashboard'),
                                            ],
                                            [
                                                'label' => 'Edit',
                                                'route' => route('collections.edit', [
                                                    'collection' => $collection->handle,
                                                ]),
                                            ],
                                            [
                                                'label' => 'Delete',
                                                'route' => route('collections.destroy', [
                                                    'collection' => $collection->handle,
                                                ]),
                                            ],
                                        ];
                                    @endphp
                                    <x-customDropdown :menuItems="$menuItems" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
