@extends('layouts.main')

@section('title', 'Navigations')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div class="flex items-center justify-between mb-6" bis_skin_checked="1">
            <h1>{{ 'Navigation' }}</h1>
            <a href="{{ route('navigations.create') }}" class="btn-primary">Create Navigation</a>
        </div>
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
        <div class="card p-0">
            <table data-size="sm" tabindex="0" class="data-table">
                {{-- Head content goes here --}}
                <x-table-head :columns="$columns" />
                <tbody tabindex="0">
                    @foreach ($navigationsInfo as $navigation)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td>
                                <a href="{{ route('navigations.index') }}" class="flex items-center">
                                    {{ $navigation->title }}
                                </a>
                            </td>
                            <th class="actions-column">
                                <div class="w-8 dropdown-list">
                                    <div aria-haspopup="true">
                                        @php
                                            $menuItems = [
                                                [
                                                    'label' => 'Edit',
                                                    'route' => route('navigations.edit', ['navigation' => $navigation->handle]),
                                                ],
                                                [
                                                    'label' => 'Delete',
                                                    'route' => route('navigations.destroy', ['navigation' => $navigation->id]),
                                                ],
                                                // Add more menu items as needed
                                            ];
                                        @endphp
                                        <x-customDropdown :menuItems="$menuItems" />
                                    </div>
                                    <div class="v-portal" style="display: none;"></div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
