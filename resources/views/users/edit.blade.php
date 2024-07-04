@extends('layouts.main')

@section('title', 'Edit User')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <header class="mb-6">
                    <div class="breadcrumb flex">
                        <a href="{{ route('users.index') }}"
                            class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                            <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z">
                                </path>
                            </svg>
                            <span>{{ 'Users' }}</span>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <h1 class="flex-1">{{ $user->email }}</h1>
                        <div class="dropdown-list rtl:ml-4 ltr:mr-4 relative" x-data="{ isOpen: false }">
                            <div aria-haspopup="true" class="dropdown-toggle cursor-pointer" @click="isOpen = !isOpen">
                                <button aria-label="Open Dropdown" class="rotating-dots-button">
                                    <svg width="12" viewBox="0 0 24 24"
                                        class="rotating-dots fill-current transition-transform transform"
                                        :class="{ 'rotate-90': isOpen }">
                                        <circle cx="3" cy="12" r="3"></circle>
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <circle cx="21" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </div>
                            <div class="dropdown-content absolute top-8 left-0 w-32 bg-white border border-gray-300 rounded-md shadow-md"
                                x-show="isOpen" @click.away="isOpen = false">
                                <ul>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Option 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Option 2
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn-primary" id="saveButton" type="submit">Save</button>
                    </div>
                </header>
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
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
                <div>
                    <div id="second_parent" class="border-2 shadow---D3zC container bg-white rounded-lg min-h-full">

                        <div class="form-group publish-field publish-field__name text-fieldtype w-full">
                            <div class="field-inner">
                                <label for="field_name" class="publish-field-label">
                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Name</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <div class="input-group">
                                    <input id="field_name" name="name" value="{{ $user->name }}" type="text"
                                        class="input-text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group publish-field publish-field__email text-fieldtype w-full">
                            <div class="field-inner">
                                <label for="field_email" class="publish-field-label">
                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Email Address</span>
                                </label>
                            </div>
                            <div class="flex items-center">
                                <div class="input-group">
                                    <input id="field_email" name="email" value="{{ $user->email }}" type="email"
                                        class="input-text">
                                </div>
                            </div>
                            <div
                                class="form-group publish-field publish-field__roles relationship-fieldtype w-full @lg:w-1/2">
                                <div class="field-inner">
                                    <label for="fieldRoles" name="role" class="publish-field-label ">
                                        <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Roles</span>
                                    </label>
                                </div>
                                <div class="relationship-input">
                                    <div>
                                        <select id="fieldRoles" name="role" class="form-control w-full h-10 rounded-md">
                                            @foreach ($roles as $role)
                                                <option value="{{ strtolower($role->name) }}"
                                                    {{ $userRole == $role->name ? 'selected' : '' }}>{{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group publish-field publish-field__avatar assets-fieldtype w-full" id="dropUp">
                            <div class="field-inner">
                                <label for="field_avatar" class="publish-field-label">
                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Avatar</span>
                                </label>
                            </div>
                            <div class="@container">
                                <div>
                                    <input type="file" name="image" id="uploadButton">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <script>
        document.getElementById('saveButton').addEventListener('click', function() {
            document.getElementById('userForm').submit();
        });
        document.getElementById('togglePasswordFields').addEventListener('click', function() {
            var passwordFields = document.getElementById('passwordFields');
            passwordFields.classList.toggle('hidden');
        });

        document.getElementById('revealPassword').addEventListener('click', function() {
            var passwordInputs = document.querySelectorAll('input[type="password"]');
            passwordInputs.forEach(function(input) {
                input.type = input.type === 'password' ? 'text' : 'password';
            });
        });
    </script> --}}
@endsection
