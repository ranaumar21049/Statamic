@extends('layouts.main')

@section('title', 'Globals')

@section('content')
@if ($globalsInfo->isEmpty())
<div class="page-wrapper max-w-xl">
    <div class="no-results md:mt-4 max-w-md mx-auto">
      <div class="card rounded-xl text-center p-6 lg:py-10">
        <h1 class="mb-8">Globals</h1>
        <div class="hidden md:block"><svg width="163" height="141" viewBox="0 0 163 141" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M82 125C116.493 125 144.455 97.0178 144.455 62.5C144.455 27.9822 116.493 0 82 0C47.507 0 19.5449 27.9822 19.5449 62.5C19.5449 97.0178 47.507 125 82 125Z"
              fill="#EAEEF9"></path>
            <g filter="url(#filter0_d_18_6329)">
              <path
                d="M135.754 107.955H27.8471C25.1581 107.955 22.9517 105.779 22.9517 103.128V20.7357C22.9517 18.0844 25.1581 15.9091 27.8471 15.9091H135.754C138.443 15.9091 140.649 18.0844 140.649 20.7357V103.128C140.649 105.779 138.443 107.955 135.754 107.955Z"
                fill="url(#paint0_linear_18_6329)"></path>
            </g>
            <path
              d="M130.72 76.0076H32.1908C30.605 76.0076 29.2949 74.6966 29.2949 73.1096V43.2328C29.2949 41.6458 30.605 40.3348 32.1908 40.3348H130.72C132.306 40.3348 133.616 41.6458 133.616 43.2328V73.0407C133.616 74.6966 132.306 76.0076 130.72 76.0076Z"
              fill="#EAEEF9"></path>
            <mask id="mask0_18_6329" maskUnits="userSpaceOnUse" x="29" y="40" width="105" height="37"
              style="mask-type: alpha;">
              <path
                d="M130.72 76.0076H32.1908C30.605 76.0076 29.2949 74.6966 29.2949 73.1096V43.2328C29.2949 41.6458 30.605 40.3348 32.1908 40.3348H130.72C132.306 40.3348 133.616 41.6458 133.616 43.2328V73.0407C133.616 74.6966 132.306 76.0076 130.72 76.0076Z"
                fill="#F1F3F9"></path>
            </mask>
            <g mask="url(#mask0_18_6329)">
              <path
                d="M116.654 78.0776H46.2559V48.6837C46.2559 47.5797 47.1522 46.6827 48.2554 46.6827H114.654C115.757 46.6827 116.654 47.5797 116.654 48.6837V78.0776Z"
                fill="white"></path>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M56.3926 58.1368C56.3926 57.7557 56.7013 57.4468 57.0821 57.4468H74.7333C75.1141 57.4468 75.4228 57.7557 75.4228 58.1368C75.4228 58.5178 75.1141 58.8268 74.7333 58.8268H57.0821C56.7013 58.8268 56.3926 58.5178 56.3926 58.1368Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M56.3926 62.6218C56.3926 62.2407 56.7013 61.9318 57.0821 61.9318H69.0104C69.3912 61.9318 69.6999 62.2407 69.6999 62.6218C69.6999 63.0028 69.3912 63.3118 69.0104 63.3118H57.0821C56.7013 63.3118 56.3926 63.0028 56.3926 62.6218Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M56.3926 66.4857C56.3926 66.1046 56.7013 65.7957 57.0821 65.7957H105.416C105.797 65.7957 106.106 66.1046 106.106 66.4857C106.106 66.8667 105.797 67.1756 105.416 67.1756H57.0821C56.7013 67.1756 56.3926 66.8667 56.3926 66.4857Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M56.3926 70.4877C56.3926 70.1067 56.7013 69.7977 57.0821 69.7977H105.416C105.797 69.7977 106.106 70.1067 106.106 70.4877C106.106 70.8688 105.797 71.1777 105.416 71.1777H57.0821C56.7013 71.1777 56.3926 70.8688 56.3926 70.4877Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M56.3926 74.4898C56.3926 74.1087 56.7013 73.7998 57.0821 73.7998H105.416C105.797 73.7998 106.106 74.1087 106.106 74.4898C106.106 74.8709 105.797 75.1798 105.416 75.1798H57.0821C56.7013 75.1798 56.3926 74.8709 56.3926 74.4898Z"
              fill="#989FB0"></path>
            <path
              d="M108.242 31.158H47.7732C46.9458 31.158 46.2563 30.6118 46.2563 29.9565V28.0449C46.2563 27.3895 46.9458 26.8434 47.7732 26.8434H108.242C109.07 26.8434 109.759 27.3895 109.759 28.0449V29.9565C109.828 30.6118 109.139 31.158 108.242 31.158Z"
              fill="url(#paint1_linear_18_6329)"></path>
            <path
              d="M132.513 89.0486H47.3597C46.7391 89.0486 46.1875 88.7005 46.1875 88.2031V86.9596C46.1875 86.5119 46.6702 86.114 47.3597 86.114H132.444C133.064 86.114 133.616 86.4622 133.616 86.9596V88.2031C133.616 88.7005 133.133 89.0486 132.513 89.0486Z"
              fill="url(#paint2_linear_18_6329)"></path>
            <path
              d="M103.416 97.6735H47.3597C46.7391 97.6735 46.1875 97.3253 46.1875 96.8279V95.5845C46.1875 95.1368 46.6702 94.7389 47.3597 94.7389H103.347C103.968 94.7389 104.519 95.0871 104.519 95.5845V96.8279C104.519 97.2756 104.037 97.6735 103.416 97.6735Z"
              fill="url(#paint3_linear_18_6329)"></path>
            <path
              d="M38.6032 34.0559H30.9497C30.0534 34.0559 29.2949 33.2969 29.2949 32.3999V24.672C29.2949 23.775 30.0534 23.016 30.9497 23.016H38.6032C39.4995 23.016 40.258 23.775 40.258 24.672V32.3309C40.258 33.2969 39.4995 34.0559 38.6032 34.0559Z"
              fill="#EAEEF9"></path>
            <path
              d="M35.5004 97.6736C32.0529 97.6736 29.2949 94.9136 29.2949 91.4636C29.2949 88.0136 32.0529 85.2537 35.5004 85.2537C38.9479 85.2537 41.7059 88.0136 41.7059 91.4636C41.7059 94.8446 38.9479 97.6736 35.5004 97.6736Z"
              fill="#C2C8D6"></path>
            <path
              d="M39.2235 94.6375C38.2582 93.6715 37.3618 93.1195 35.5002 93.1195C33.5696 93.1195 32.7422 93.7405 31.7769 94.6375C32.6732 95.6725 34.0522 96.3625 35.5691 96.3625C36.9481 96.3625 38.1892 95.8105 39.0856 94.9135C39.0856 94.8445 39.2235 94.7755 39.2235 94.6375C39.2235 94.6375 39.2924 94.6375 39.2235 94.6375Z"
              fill="white"></path>
            <path
              d="M35.4997 91.9465C36.6421 91.9465 37.5682 91.0197 37.5682 89.8765C37.5682 88.7333 36.6421 87.8065 35.4997 87.8065C34.3573 87.8065 33.4312 88.7333 33.4312 89.8765C33.4312 91.0197 34.3573 91.9465 35.4997 91.9465Z"
              fill="white"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1207 26.1555H31.1567V25.1205H38.1207V26.1555Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1207 28.9155H31.1567V27.8805H38.1207V28.9155Z"
              fill="#989FB0"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.9143 31.6754H31.1567V30.6404H35.9143V31.6754Z"
              fill="#989FB0"></path>
            <defs>
              <filter id="filter0_d_18_6329" x="0.95166" y="4.90906" width="161.698" height="136.045"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha"></feColorMatrix>
                <feOffset dy="11"></feOffset>
                <feGaussianBlur stdDeviation="11"></feGaussianBlur>
                <feColorMatrix type="matrix" values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0">
                </feColorMatrix>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_6329"></feBlend>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_6329" result="shape">
                </feBlend>
              </filter>
              <linearGradient id="paint0_linear_18_6329" x1="81.7621" y1="13.78" x2="81.7621" y2="108.947"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#FDFEFF"></stop>
                <stop offset="0.9964" stop-color="#ECF0F5"></stop>
              </linearGradient>
              <linearGradient id="paint1_linear_18_6329" x1="107.245" y1="26.8434" x2="48.3469" y2="29.8617"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#B0BACC"></stop>
                <stop offset="1" stop-color="#969EAE"></stop>
              </linearGradient>
              <linearGradient id="paint2_linear_18_6329" x1="130.148" y1="86.114" x2="49.7178" y2="94.4567"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#B0BACC"></stop>
                <stop offset="1" stop-color="#969EAE"></stop>
              </linearGradient>
              <linearGradient id="paint3_linear_18_6329" x1="102.205" y1="94.7389" x2="48.2241" y2="98.4747"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#B0BACC"></stop>
                <stop offset="1" stop-color="#969EAE"></stop>
              </linearGradient>
            </defs>
          </svg></div>
        <p class="text-gray-700 leading-normal my-8 text-lg antialiased">
          Global Sets manage content available across the entire
          site, like company details, contact information, or front-end settings.
        </p> <a href="{{ route('globals.create') }}" class="btn-primary btn-lg">Create Global
          Set</a>
      </div>
    </div>
    <div class="flex justify-center text-center mt-16">
      <div class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700">Learn more about <a
          href="https://statamic.dev/globals" target="_blank" rel="noopener noopener"
          class="text-blue hover:text-blue-700">Global Variables</a></div>
    </div>
  </div>
@else
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Globals</h1>
            <a href="{{ route('globals.create') }}" class="btn-primary">
                Create Global Set
            </a>
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
        <div class="card p-0" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                {{-- Head content goes here --}}
                <x-table-head :columns="$columns" />
                <tbody tabindex="0">
                    @foreach ($globalsInfo as $globals)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td class="">
                                <a href="{{ route('globals.edit', $globals->handle) }}">
                                    {{ $globals->title }}
                                </a>
                            </td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="entries" values="" class="" bis_skin_checked="1">
                                        {{ $globals->handle }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    @php
                                        $menuItems = [
                                            [
                                                'label' => 'Edit',
                                                'route' => route('globals.edit', $globals->handle),
                                            ],
                                            [
                                                'label' => 'Delete',
                                                'route' => route('globals.destroy', $globals->handle),
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
@endif
@endsection
