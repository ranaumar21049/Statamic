@php
    use App\Models\SidebarContent;
    $sidebar = SidebarContent::all();
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>@yield('title') :: Cedar</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/tailwind-dbc9382a.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboardMain.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">

    {{-- Calling script before body to access in body --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- ck-5 editor link --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
</head>

<body>
    <div id="statamic" bis_skin_checked="1">
        {{-- Header --}}
        <x-dashboardHeader></x-dashboardHeader>

        {{-- Include the sidebar component --}}
        <div id="main" class="" bis_skin_checked="1">
            <nav class="nav-main">
                <div class="nav-main-inner" bis_skin_checked="1">
                    <x-sidebarContent :sidebar="$sidebar" />
                </div>
            </nav>
            {{-- dynamic pages goes here  --}}
            <div class="workspace" bis_skin_checked="1">
                @yield('content')
                <div class="flex justify-center text-center mt-16" bis_skin_checked="1">
                    <div class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700" bis_skin_checked="1">
                        {{ '© 2024 Cedar Technologies. All Rights Reserved | Design and Developed by Cedar Technologies' }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
