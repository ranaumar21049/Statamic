<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<div class="head-link h-full rtl:md:pl-6 ltr:md:pr-6 flex items-center justify-end">
    <div class="hidden md:block">
        <div class="relative">
            <div class="dropdown inline-block relative">
                <button id="dropdown1" slot="reference" aria-label="Pin to Favorites"
                    class="h-6 w-6 block outline-none p-1 text-gray hover:text-gray-800 v-popper--has-tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="3" viewBox="0 0 48 48">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M44.161 23.04c.591-.652.928-1.492.862-2.37-.154-2.04-1.17-6.246-6.286-11.363-5.1-5.1-9.318-6.147-11.378-6.319-.895-.074-1.756.266-2.42.87-3.978 3.623-5.3 9.72-5.733 12.961-.156 1.168-1.22 2.079-2.397 2.13-1.754.075-4.318.44-6.775 1.727-1.323.693-1.832 2.245-1.216 3.605.899 1.98 2.717 5.088 6.287 8.658 3.57 3.569 6.66 5.373 8.63 6.259 1.352.608 2.89.098 3.58-1.214 1.295-2.462 1.661-5.035 1.737-6.793.05-1.176.962-2.24 2.129-2.396 3.248-.434 9.36-1.76 12.98-5.755Z">
                        </path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M12.011 29.45C6.722 36.92 2.075 43.76 3.157 44.842c1.081 1.082 7.92-3.563 15.388-8.85M28 10.15c.94 1.646 2.312 3.505 4.31 5.502 2.07 2.07 3.995 3.473 5.69 4.42">
                        </path>
                    </svg>
                </button>
            </div>
            <div id="dropdown-content1" class="dropdown-content absolute hidden text-gray-700 pt-1 right-2">
                <div class="bg-white shadow-popover rounded-md">
                    <div class="p-4 pb-2">
                        <h6 class="mb-2">Pin to Favorites</h6>
                        <div class="flex items-center">
                            <input type="text" class="input-text w-auto">
                            <button class="btn-primary rtl:mr-2 ltr:ml-2">Save</button>
                        </div>
                        <button class="mt-2 text-xs text-blue outline-none hover:text-blue-800">Set as
                            start page<span>→</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <div class="dropdown inline-block relative">
            <button id="dropdown2" aria-label="Manage Preferences"
                class="hidden md:block h-6 w-6 rtl:mr-4 ltr:ml-4 p-1 text-gray hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M10.546 2.438a1.957 1.957 0 0 0 2.908 0L14.4 1.4a1.959 1.959 0 0 1 3.41 1.413l-.071 1.4a1.958 1.958 0 0 0 2.051 2.054l1.4-.071a1.959 1.959 0 0 1 1.41 3.41l-1.042.94a1.96 1.96 0 0 0 0 2.909l1.042.94a1.959 1.959 0 0 1-1.413 3.41l-1.4-.071a1.958 1.958 0 0 0-2.056 2.056l.071 1.4A1.959 1.959 0 0 1 14.4 22.6l-.941-1.041a1.959 1.959 0 0 0-2.908 0L9.606 22.6A1.959 1.959 0 0 1 6.2 21.192l.072-1.4a1.958 1.958 0 0 0-2.056-2.056l-1.4.071A1.958 1.958 0 0 1 1.4 14.4l1.041-.94a1.96 1.96 0 0 0 0-2.909L1.4 9.606A1.958 1.958 0 0 1 2.809 6.2l1.4.071a1.958 1.958 0 0 0 2.058-2.06L6.2 2.81A1.959 1.959 0 0 1 9.606 1.4Z">
                    </path>
                    <circle cx="12" cy="12.001" r="4.5" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                </svg>
            </button>
        </div>
        <div id="dropdown-content2" class="dropdown-content absolute hidden text-gray-700 pt-1 right-2">
            <div class="bg-white shadow-popover rounded-md w-48" bis_skin_checked="1">
                <a href="javascript:void(0);"
                    class="rounded-t hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Preferences</a>
                <a href="javascript:void(0);" class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">CP
                    Nav</a>
            </div>
        </div>
    </div>
    <div class="relative">
        <div class="dropdown inline-block relative">
            <button id="dropdown3" aria-label="View Useful Links"
                class="hidden md:block h-6 w-6 rtl:mr-4 ltr:ml-4 p-1 text-gray hover:text-gray-800 v-popper--has-tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M12 22.125V4.712S9.545 1.985 1.268 1.875a.506.506 0 0 0-.366.15.522.522 0 0 0-.152.369v16.375a.515.515 0 0 0 .5.519C9.543 19.4 12 22.125 12 22.125M9 11.18a21.258 21.258 0 0 0-5.26-1.055M9 15.375a21.258 21.258 0 0 0-5.26-1.055M15 11.18a21.258 21.258 0 0 1 5.26-1.055M15 15.375a21.258 21.258 0 0 1 5.26-1.055">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M12 22.125V4.712s2.455-2.727 10.732-2.837a.506.506 0 0 1 .366.15.522.522 0 0 1 .152.369v16.375a.515.515 0 0 1-.5.519C14.457 19.4 12 22.125 12 22.125">
                    </path>
                </svg>
            </button>
        </div>
        <div id="dropdown-content3" class="dropdown-content absolute hidden text-gray-700 pt-1 right-2">
            <div class=" w-48 bg-white shadow-popover rounded-md">
                <a href="javascript:void(0);" target="_blank"
                    class="flex rounded-t hover:bg-gray-200 py-2 px-4 whitespace-no-wrap"><span>Documentation</span>
                    <i class="w-3 block rtl:mr-2 ltr:ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                            </path>
                        </svg>
                    </i>
                </a>
                <a href="javascript:void(0);" target="_blank"
                    class="flex hover:bg-gray-200 py-2 px-4 whitespace-no-wrap"><span>Support</span>
                    <i class="w-3 block rtl:mr-2 ltr:ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                            </path>
                        </svg>
                    </i>
                </a>
                <a class="flex hover:bg-gray-200 py-2 px-4 whitespace-no-wrap"><span>Keyboard
                        Shortcuts</span></a>    
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" target="_blank" aria-label="View Site"
        class="hidden md:block h-6 w-6 p-1 text-gray rtl:mr-4 ltr:ml-4 hover:text-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="1.5"
                d="M23.25 19.5v.635a1.62 1.62 0 0 1-1.615 1.615H2.25a1.5 1.5 0 0 1-1.5-1.5v-.75m0-11.25V3.865A1.62 1.62 0 0 1 2.365 2.25h19.278a1.612 1.612 0 0 1 1.607 1.607V8.25m0-1.5H.75m7.5 4.5a3 3 0 0 0-3 3 3 3 0 0 0 3 3m4.5-6a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 3 0v-3a1.5 1.5 0 0 0-1.5-1.5zm9 6v-6L19.5 15l-2.25-3.75v6M2.625 16.5a.375.375 0 1 1-.375.375.375.375 0 0 1 .375-.375">
            </path>
        </svg>
    </a>
    <div class="relative ">
        <div class="dropdown inline-block relative">
            <button id="dropdown4" class="md:block h-10 w-10 rtl:mr-4 ltr:ml-4 p-1 text-gray hover:text-gray-800 ">
                <div class="rounded-full hover:shadow-md">
                    @if (Auth::user()->image ?? false)
                        <img class="rounded-full hover:shadow-xl" src="{{ asset('/images/' . Auth::user()->image) }}">
                    @else
                        <img class="rounded-full hover:shadow-xl"
                            src="{{ asset('/imgs/cedar_technologiess_logo.jpg') }}">
                    @endif

                </div>
            </button>
        </div>
        <div id="dropdown-content4" class="dropdown-content absolute hidden text-gray-700 pt-1 right-2">
            <div class="w-64 bg-white shadow-popover rounded-md">
                <div class="px-2 border-b">
                    <div class="rounded-t text-base mb-px py-2 px-4 whitespace-no-wrap font-semibold">
                        @if (Auth::check())
                            {{ Auth::user()->email }}
                        @else
                            Guest
                        @endif
                    </div>
                </div>
                <div class="flex flex-col">
                    <a href="{{ route('profile') }}" class="hover:bg-gray-200 py-2 px-4 whitespace-no-wrap">
                        Profile
                    </a>
                    <a href="{{ route('logout') }}" class="rounded-b hover:bg-gray-200 py-2 px-4 whitespace-no-wrap">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
