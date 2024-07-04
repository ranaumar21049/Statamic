@props(['menuItems'])

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="relative" x-data="{ dropdownOpen: false }">
    <button @click="dropdownOpen = !dropdownOpen" class=" z-10 block focus:outline-none">
        <svg class="w-5 h-5" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="10" r="6" />
            <circle cx="50" cy="40" r="6" />
            <circle cx="50" cy="70" r="6" />
        </svg>
    </button>
    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
    </div>

    <div x-show="dropdownOpen" class="absolute right-4 mb-4 py-2 w-48 bg-white rounded-md shadow-xl z-20">
        @foreach ($menuItems as $menuItem)
            @if ($menuItem['label'] == 'Delete')
                <form action="{{ $menuItem['route'] }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="block px-4 py-2 text-sm capitalize hover:text-white text-black hover:bg-red-500"
                        style="text-align: start;">
                        <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                    </button>
                </form>
            @else
                <a href="{{ $menuItem['route'] }}"
                    class="block px-4 py-2 text-sm capitalize text-black hover:bg-blue-500" style="text-align: start;">
                    <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                </a>
            @endif
        @endforeach
    </div>
</div>
