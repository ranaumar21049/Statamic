<!-- The only way to do great work is to love what you do. - Steve Jobs -->
{{-- <ul>
    @foreach ($sidebar as $item)
        @if (!isset($currentParent) || $currentParent != $item['parent'])
            @if (isset($currentParent))
                </ul>
            @endif
            <h6>{{ $item['parent'] }}</h6>
            <ul>
            @php $currentParent = $item['parent']; @endphp
        @endif
    <li class="">
        <a href="{{ $item['url'] }}"><i>{!! $item['svg'] !!}</i><span>{{ $item['name'] }}</span></a>
    </li>
    @endforeach
</ul> --}}
<nav class="nav-main">
    <div class="nav-main-inner">
        <ul class="nav-section-top-level">
            <li class="current">
                <a href="{{ route('dashboard') }}"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <circle cx="7" cy="8.5" r="3.5" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M7 5v3.5h3.5M9 22.5a6.979 6.979 0 0 0 1.5-4m4.5 4a6.979 6.979 0 0 1-1.5-4m-6.001 4h9M.5 15.5h23">
                            </path>
                            <rect width="23" height="17" x=".5" y="1.5" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" rx="1" ry="1"></rect>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 7 15 5l3 2.5 2.5-3m-1 8V11m-2 1.5v-2m-2 2v-3m-2 3V11"></path>
                        </svg></i><span>Dashboard</span></a>
            </li>
        </ul>
        <h6>Content</h6>
        <ul class="nav-section-content">
            <li class="">
                <a href="{{ route('collections.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9">
                            </path>
                        </svg></i><span>Collections</span></a>

                @if (request()->routeIs('collections.index'))
                    @foreach ($collectionsInfo as $collection)
                        <a href="{{ route('entries.index', ['collection' => $collection->handle]) }}">
                            {{ $collection->title }}
                        </a>
                    @endforeach
                @endif


            </li>
            <li class="">
                <a href="{{ route('navigations.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M2.505 9.499v2.5m0 2.5v2.5m0-11.499v1a1 1 0 0 0 1 1h1m-2 12v1a1 1 0 0 0 1 1h1M7 7.499h3m-3 14h3m-7.495-21v2.5M20.5 9.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a2.782 2.782 0 0 1 1.707.707l1.586 1.586A2.782 2.782 0 0 1 20.5 4.5z">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M17 .569V3a1 1 0 0 0 1 1h2.429m.071 18.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3.114a2.139 2.139 0 0 1 1.513.627l1.666 1.666A2.782 2.782 0 0 1 20.5 17.5z">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M17 13.536V16a1 1 0 0 0 1 1h2.43"></path>
                        </svg></i><span>Navigation</span></a>

                @if (request()->routeIs('navigations.index'))
                    @foreach ($navigationsInfo as $navigation)
                        <a href="{{ route('navigations.index', ['navigation' => $navigation->handle]) }}">
                            {{ $navigation->title }}
                        </a>
                    @endforeach
                @endif
            </li>
            <li class="">
                <a href="{{ route('taxonomies.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M23.03 14.545a.552.552 0 0 1-.249 1l-5.544 1.692-1.693 5.543a.551.551 0 0 1-1 .249L1.452 9.938a2.789 2.789 0 0 1-.708-1.707L.738 1.737a1 1 0 0 1 1-1h6.491a2.782 2.782 0 0 1 1.707.707z">
                            </path>
                            <circle cx="5.737" cy="5.737" r="2" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                        </svg></i><span>Taxonomies</span></a>
                @if (request()->routeIs('taxonomies.index'))
                    @foreach ($taxonomiesInfo as $taxonomies)
                        <a href="{{ route('taxonomies.index', ['taxonomy' => $taxonomies->handle]) }}">
                            {{ $taxonomies->title }}
                        </a>
                    @endforeach
                @endif
            </li>
            <li class="">
                <a href="{{ route('assets.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="m15.543 15.543-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 0 0-1.155.089l-2.486 4.142">
                            </path>
                            <rect width="17" height="17" x="1.543" y="1.543" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" rx="1" ry="1"></rect>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="m20.551 7.424 1 .091a1 1 0 0 1 .901 1.085l-1.181 12.948a1 1 0 0 1-1.087.9L6.243 21.18m-4.7-5.637h17">
                            </path>
                            <circle cx="6.043" cy="6.043" r="1.5" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                        </svg></i><span>Assets</span></a>
            </li>
            <li class="">
                <a href="{{ route('globals.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="11.985" r="11.5" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M.673 9.985h6.084a3 3 0 0 1 2.122.878L10 11.984a3 3 0 0 1 .121 4.115l-1.363 1.533A3 3 0 0 0 8 19.625v3.145M20.261 3.985h-5.8a2.25 2.25 0 0 0 0 4.5h.432a3 3 0 0 1 2.5 1.335l2.218 3.329a3 3 0 0 0 2.5 1.336h1.121">
                            </path>
                        </svg></i><span>Globals</span></a>

                @if (request()->routeIs('globals.index'))
                    @foreach ($globalsInfo as $globals)
                        <a href="{{ route('globals.index', ['taxonomy' => $globals->handle]) }}">
                            {{ $globals->title }}
                        </a>
                    @endforeach
                @endif
            </li>
        </ul>
        <h6>Fields</h6>
        <ul class="nav-section-fields">
            <li class="">
                <a href="#"><i><svg viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M23.045 23.294A.3.3 0 0 0 23.5 23V4.177a.847.847 0 0 0-.455-.706L16.985.727a1.437 1.437 0 0 0-.927-.041L8.049 3.491a1.463 1.463 0 0 1-.929-.037L.957.723a.3.3 0 0 0-.457.3l.019 18.821a.843.843 0 0 0 .458.7l6.128 2.728c.297.114.623.127.929.039l8.024-2.8c.305-.089.631-.074.927.041l6.06 2.742z">
                                </path>
                                <path
                                    d="M2.963 4.135a.315.315 0 0 0-.464.312v14.058a.8.8 0 0 0 .465.684L7.1 20.826a1.6 1.6 0 0 0 .939.025l8.494-2.846 4.5 1.775a.317.317 0 0 0 .465-.317V5.916a.874.874 0 0 0-.448-.716l-4.071-1.981a1.407 1.407 0 0 0-.923-.06l-8 2.682a1.572 1.572 0 0 1-.938-.028L2.963 4.135zm11.536 4.844V3.681">
                                </path>
                                <path
                                    d="m2.5 14.349 5.157 1.887 3.371-1.157a.334.334 0 0 1 .472.337v4.275m3-1.005v-4.207a.871.871 0 0 1 .452-.716l1.014-.485c.292-.12.617-.132.918-.036l4.616 1.779M2.499 7.946l5 2.001 3.969-1m-6.969-.2V6.979m4 2.716V7.979m-2 1.568V7.979">
                                </path>
                            </g>
                        </svg></i><span>Blueprints</span></a>
            </li>
            <li class="">
                <a href="{{ route('fieldsets.index') }}"><i><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 23.48 23.68">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11.63 19.58H1.56A1.05 1.05 0 0 1 .5 18.52v-17A1.05 1.05 0 0 1 1.56.5h15.9a1.05 1.05 0 0 1 1.06 1.06v10.57">
                            </path>
                            <rect width="13.78" height="5.3" x="2.62" y="2.62" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" rx=".53">
                            </rect>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.62 10.57v6.36a.53.53 0 0 0 .53.53h6.72a.53.53 0 0 0 .53-.53.68.68 0 0 0 0-.14l-1.84-6.36a.53.53 0 0 0-.51-.43h-4.9a.53.53 0 0 0-.53.57Zm13.78 6.89v-6.89a.53.53 0 0 0-.53-.53h-4.06a.53.53 0 0 0-.53.53.39.39 0 0 0 0 .15l1.92 6.74h3.2m4.6-.28v3a3 3 0 0 1-3 3h-3m4-4 2-2 2 2">
                            </path>
                        </svg></i><span>Fieldsets</span></a>
            </li>
        </ul>
        <h6>Tools</h6>
        <ul class="nav-section-tools">
            <li class="">
                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 14.5v-13a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1v13m19 8a1 1 0 0 1-1 1h-21a1 1 0 0 1-1-1v-6h7v1a2.006 2.006 0 0 0 2 2h5a2.006 2.006 0 0 0 2-2v-1h7zm-23-6 4-6m15 0 4 6m-15-13h1.997m.003 3h5m-7 3h7m-7 3h7">
                            </path>
                        </svg></i><span>Forms</span></a>
            </li>
            <li>
                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M23.5 19.5a2 2 0 0 1-2 2h-19a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h19a2 2 0 0 1 2 2zM.5 8.498h23">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.5 15A2.5 2.5 0 0 1 6 12.5h12a2.5 2.5 0 0 1 0 5H6A2.5 2.5 0 0 1 3.5 15zm2.041 2.455 4.957-4.957m-.5 5 5-5m-10.5-9v5m4-5v5">
                            </path>
                        </svg></i><span>Updates</span>
                    <span class="badge-sm bg-red-500 rtl:mr-2 ltr:ml-2">
                        1
                    </span></a>
            </li>
            <li class="">
                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z">
                                </path>
                                <path
                                    d="M11.121 4.38A3 3 0 1 1 6.88 8.622a3 3 0 0 1 4.24-4.242m6.501 11a3 3 0 1 1-4.242 4.242 3 3 0 0 1 4.242-4.242M12.5 17.5h-9m17 0h-2M12 6.5h8.5m-17 0H6">
                                </path>
                                <path
                                    d="M9 6.251a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25m6.5 11a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25">
                                </path>
                            </g>
                        </svg></i><span>Utilities</span></a>
            </li>
            <li class="">
                <a href="#" target='"_blank"'><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                transform="scale(.66667)">
                                <rect width="13" height="3" x=".5" y=".499" rx="1" ry="1">
                                </rect>
                                <rect width="13" height="3" x="10.5" y="12.499" rx="1"
                                    ry="1"></rect>
                                <rect width="13" height="3" x="10.5" y="20.499" rx="1"
                                    ry="1"></rect>
                                <path d="M17.5 15.499v5M7.5 3.5V8A1.5 1.5 0 0 0 9 9.5h7a1.5 1.5 0 0 1 1.5 1.5v1.5">
                                </path>
                            </g>
                        </svg></i><span>GraphQL</span></a>
            </li>
            <li class="">
                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M1.012 11.942a8.5 8.5 0 0 1 15.022-7.685M15.01 15.041l2.333 2.332M23 20.909a1.5 1.5 0 1 1-2.121 2.121l-3.889-3.889a1 1 0 0 1 0-1.414l.707-.707a1 1 0 0 1 1.414 0z">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m.5 15.53 8.793-8.793a1 1 0 0 1 1.414 0l2.586 2.586a1 1 0 0 0 1.414 0L23.5.53">
                            </path>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" d="M20.5.53h3v3m-6.015 6.016a8.5 8.5 0 0 1-13.923 6.017">
                            </path>
                        </svg></i><span>SEO Pro</span></a>
            </li>
        </ul>
        <h6>Users</h6>
        <ul class="nav-section-users">
            <li class="">
                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M20.5 13.5v-8h-9.442A1.67 1.67 0 0 1 9.5 4.56 1.738 1.738 0 0 0 7.9 3.5H4a.5.5 0 0 0-.5.5v9.5m15-10h-6.456a1.739 1.739 0 0 1-1.574-1 1.741 1.741 0 0 0-1.57-1H5.5m-5 14 .839-4.2a1 1 0 0 1 .981-.8H3.5m20 5-.839-4.2a1 1 0 0 0-.981-.8H20.5">
                            </path>
                            <circle cx="12" cy="9.25" r="1.75" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.5 14.5a3.612 3.612 0 0 0-7 0zm3 1a1.5 1.5 0 0 0-1.5 1.54 1.512 1.512 0 0 1-1.559 1.46H8.558A1.512 1.512 0 0 1 7 17.04a1.5 1.5 0 0 0-1.5-1.54h-5v6a1 1 0 0 0 1 1h21a1 1 0 0 0 1-1v-6z">
                            </path>
                        </svg></i><span>Users</span></a>
            </li>
        </ul>
    </div>
</nav>
