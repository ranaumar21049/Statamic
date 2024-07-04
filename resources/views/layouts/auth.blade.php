<!DOCTYPE html>
<html lang="en" dir="ltr">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">

    <title>@yield('title')Cedar</title>

    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-32x32-c29eba9f.png" sizes="32x32">
    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-16x16-a15cab2f.png" sizes="16x16">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-bbfe21cf.ico" sizes="16x16 32x32">

    <link rel="preload" as="style" href="{{ asset('css/app-e0fc4bb9.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/tailwind-dbc9382a.css') }}">
    <link rel="modulepreload" href="{{ asset('js/app-77beb8be.js') }}">
    <link rel="stylesheet" href="{{ asset('css/app-e0fc4bb9.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind-dbc9382a.css') }}">
    <link rel="stylesheet" href="{{ asset('css/authMain.css') }}">
    <script type="module" src="{{ asset('js/app-77beb8be.js') }}"></script>
</head>

<body class="outside rad-theme " bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJDT05GSUciOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMi4wLjE0Iiwic2NvcmUiOjIwMDE0fV0=" monica-version="5.1.3" monica-id="ofpnmcalabcbjgholdjcjblkibolbppb" cz-shortcut-listen="true">
    <div id="statamic" bis_skin_checked="1">
        <div class="logo pt-20" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 17.43">
                <path fill="#3C4858"
                    d="M.53 14.2a.78.78 0 0 1 .62-.33 1.34 1.34 0 0 1 .76.29 4.88 4.88 0 0 0 2.81.84c.84 0 1.5-.35 1.5-1.06 0-1.85-6.14-.85-6.14-5 0-2.19 1.83-3.44 4.17-3.44a6.78 6.78 0 0 1 3.8 1.07.92.92 0 0 1 .37.76 1 1 0 0 1-.15.51L8 8.25a.81.81 0 0 1-.69.41 1.63 1.63 0 0 1-.64-.18 4.75 4.75 0 0 0-2.24-.54c-.88 0-1.41.48-1.41 1 0 1.89 6.13.86 6.13 4.86 0 2.24-1.82 3.64-4.59 3.64a6.11 6.11 0 0 1-4.27-1.57.84.84 0 0 1-.29-.64.76.76 0 0 1 .18-.53Zm17.57 1.19a.89.89 0 0 1-.31 1.23 5.17 5.17 0 0 1-2.85.76c-2.56 0-3.53-1.66-3.53-4.57V3.55a1 1 0 0 1 .95-.94h1a1 1 0 0 1 .95.94v2.22h2.73a1 1 0 0 1 .94.94v.86a1 1 0 0 1-.94.95h-2.71v4.14c0 1.24.41 2.06 1.35 2.06a2.13 2.13 0 0 0 .8-.13 1.76 1.76 0 0 1 .58-.12.85.85 0 0 1 .78.51Zm1.77-1.58c0-2.5 1.84-3.69 4.14-3.69a4.63 4.63 0 0 1 2.57.74v-.35c0-1.66-.53-2.57-2.11-2.57a5.59 5.59 0 0 0-1.95.31 1.85 1.85 0 0 1-.46.08.94.94 0 0 1-.86-.53l-.14-.31a1.17 1.17 0 0 1-.1-.41.91.91 0 0 1 .53-.8 7.94 7.94 0 0 1 3.28-.76c3.37 0 4.54 1.73 4.54 4.72v6a1 1 0 0 1-.95.95h-.65a1 1 0 0 1-.95-.95v-.37a4 4 0 0 1-3.36 1.43 3.31 3.31 0 0 1-3.53-3.49Zm6.71-1.17a3.3 3.3 0 0 0-2-.55c-1 0-1.83.45-1.83 1.42s.7 1.33 1.62 1.33a2.49 2.49 0 0 0 2.2-1Zm12.15 2.75a.85.85 0 0 1 .12.43.86.86 0 0 1-.43.8 5.17 5.17 0 0 1-2.85.76C33 17.38 32 15.72 32 12.81V3.55a1 1 0 0 1 1-.94h1a1 1 0 0 1 .94.94v2.22h2.73a1 1 0 0 1 1 .94v.86a1 1 0 0 1-1 .95H35v4.14c0 1.24.41 2.06 1.36 2.06a2.17 2.17 0 0 0 .8-.13 1.71 1.71 0 0 1 .57-.12.83.83 0 0 1 .78.51Zm1.76-1.58c0-2.5 1.85-3.69 4.15-3.69a4.66 4.66 0 0 1 2.57.74v-.35c0-1.66-.54-2.57-2.12-2.57a5.68 5.68 0 0 0-2 .31 1.78 1.78 0 0 1-.45.08.93.93 0 0 1-.86-.53l-.14-.31a1 1 0 0 1-.11-.41.92.92 0 0 1 .54-.8 7.94 7.94 0 0 1 3.28-.76c3.37 0 4.54 1.73 4.54 4.72v6a1 1 0 0 1-.95.95h-.65a1 1 0 0 1-1-.95v-.37A4 4 0 0 1 44 17.3a3.31 3.31 0 0 1-3.51-3.49Zm6.72-1.17a3.32 3.32 0 0 0-2-.55c-1 0-1.83.45-1.83 1.42s.7 1.33 1.62 1.33a2.49 2.49 0 0 0 2.2-1ZM55.83 7a4.82 4.82 0 0 1 3.55-1.46 3.29 3.29 0 0 1 3.3 1.83 4.6 4.6 0 0 1 3.84-1.83c2.07 0 3.63 1 3.63 4.15v6.48a1 1 0 0 1-.94.95h-1a1 1 0 0 1-.94-.95v-5.7c0-1.42-.58-2.18-1.95-2.18A2.54 2.54 0 0 0 63 9.61v6.58a1 1 0 0 1-.94.95H61a1 1 0 0 1-1-.95v-5.91a1.77 1.77 0 0 0-1.88-2 2.77 2.77 0 0 0-2.38 1.21v6.69a1 1 0 0 1-.95.95h-1a1 1 0 0 1-1-.95V6.71a1 1 0 0 1 1-.94h1a1 1 0 0 1 .95.94V7Zm20.89-5.32a1.71 1.71 0 0 1-1.66 1.83 1.75 1.75 0 0 1-1.83-1.83A1.71 1.71 0 0 1 75.06 0a1.67 1.67 0 0 1 1.66 1.68Zm-1.21 4.11a1 1 0 0 1 .94.94v9.48a1 1 0 0 1-.94.95h-1a1 1 0 0 1-.94-.95v-9.5a1 1 0 0 1 .94-.94h1Zm12.17 2.89a4.28 4.28 0 0 0-2-.45 3.13 3.13 0 0 0-3.16 3.22 3.2 3.2 0 0 0 3.28 3.27 3.72 3.72 0 0 0 2.2-.66 1.24 1.24 0 0 1 .61-.21 1 1 0 0 1 .78.37l.44.54a.76.76 0 0 1 .18.51 1 1 0 0 1-.35.8 5.74 5.74 0 0 1-4 1.33c-3.76 0-6.24-2.38-6.24-5.95a5.78 5.78 0 0 1 5.9-5.95 7.26 7.26 0 0 1 3.74.86 1 1 0 0 1 .45.84.65.65 0 0 1-.11.41l-.4.66a1.05 1.05 0 0 1-.87.54 1.78 1.78 0 0 1-.45-.13Z">
                </path>
            </svg>
        </div>
        
        @yield('auth-content')
    </div>
    <script src="{{ asset('cp.js') }}" defer=""></script>

    <link rel="preload" as="style" href="{{ asset('css/cp-56146771.css') }}">
    <link rel="preload" as="style" href="{{ asset('css/cp-7025c2cd.css') }}">
    <link rel="modulepreload" href="{{ asset('js/cp-c6df7fbd.js') }}">
    <link rel="stylesheet" href="{{ asset('css/cp-56146771.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cp-7025c2cd.css') }}">
    <script type="module" src="{{ asset('js/cp-c6df7fbd.js') }}"></script>

    <script src="data:text/javascript;base64,U3RhdGFtaWMuY29uZmlnKFN0YXRhbWljQ29uZmlnKTsgU3RhdGFtaWMuc3RhcnQoKQ==" defer=""></script>


    <div id="GSt2PkCFU" role="status" aria-live="polite" aria-atomic="false" bis_skin_checked="1"></div>
    <div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive"
        role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"
        bis_skin_checked="1"></div>
    <webchatgpt-custom-element-abab2cb8-515d-4f54-9b05-eb4799c93324 id="webchatgpt-snackbar"
        style="color: rgb(255, 255, 255);"><template shadowrootmode="open">
            <style id="webchatgpt-snackbar-container-emotion-style"></style>
            <div id="webchatgpt-snackbar-container" style="z-index: 2147483647;"></div>
        </template></webchatgpt-custom-element-abab2cb8-515d-4f54-9b05-eb4799c93324>
    <div id="monica-content-root" class="monica-widget" data-darkreader-mode="dynamic" data-darkreader-scheme="dark"
        bis_skin_checked="1"><template shadowrootmode="open">

            <style data-rc-order="prependQueue" data-css-hash="1mlrqvk" data-token-hash="1svjfp6">
                .anticon {
                    display: inline-flex;
                    align-items: center;
                    color: inherit;
                    font-style: normal;
                    line-height: 0;
                    text-align: center;
                    text-transform: none;
                    vertical-align: -0.125em;
                    text-rendering: optimizeLegibility;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                }

                .anticon>* {
                    line-height: 1;
                }

                .anticon svg {
                    display: inline-block;
                }

                .anticon .anticon .anticon-icon {
                    display: block;
                }
            </style>

            <div>
                <div class="_monica-dark root-container-UmvGjM" lang="en">
                    <div class="content-root-rb-FdpxmT"></div>
                    <div class="content-root-WCIiJJ">
                        <div class="sidebar-entry-btn-hvXPZj sidebar-entry-btn-right-doBuCO"
                            style="visibility: visible; bottom: 109.95px;">
                            <div class="float-btn-box-yen8CN">
                                <div class="float-btn-dmQyFz"><img
                                        src="chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/global/src/static/monicaLogo.png"
                                        class="logo-img-drxdFH" alt=""
                                        style="width: 24px; height: 24px; border-radius: 4px;"><span
                                        class="shortcut--0OZjH" style="opacity: 0;">⌘M</span></div>
                            </div>
                            <div class="extra-tools-box-Q-raLQ toolbar-AlHpmQ" style="bottom: -12px;">
                                <div class="trigger-area-rZm0LF"></div>
                                <div class="top-t5av-O"></div>
                                <div class="bot-bqr602"></div>
                            </div>
                        </div>
                        <div class="dialog-root-ZbJNQk"></div>
                        <div class="reading-summary-status-bar-yFqhHz"></div>
                        <div class="contextual-toolbar-BjPOM3"></div>
                    </div>
                </div>
            </div>
        </template>
        <meta name="darkreader" content="6e3895b62271450aa5dae84294c84511">
    </div>
</body>

</html>
