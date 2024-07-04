@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="widgets @container flex flex-wrap -mx-4 py-2" bis_skin_checked="1">
            <div class="widget w-full md:w-full mb-8 px-4" bis_skin_checked="1">
                <div x-data="timer(when.getTime())" x-init="init()" class="card p-2 content timer" bis_skin_checked="1">
                    👋 &nbsp; Welcome to the Cedar Demo site! Go bananas with it because it will reset in:
                    <div class="inline-block px-sm bg-yellow" bis_skin_checked="1"><span
                            x-text="time().minutes">01</span>:<span x-text="time().seconds">53</span></div>
                </div>
            </div>
            <div class="widget w-full md:w-full mb-8 px-4" bis_skin_checked="1">
                <div class="card p-0 content" bis_skin_checked="1">
                    <div class="py-6 px-8 border-b" bis_skin_checked="1">
                        <h1>Getting Started with Cedar</h1>
                        <p>To begin building your new Cedar site, we recommend starting with these steps.</p>
                    </div>
                    <div class="flex flex-wrap p-4" bis_skin_checked="1"><a href="https://statamic.dev/"
                            class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group">
                            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800" bis_skin_checked="1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m4.435.913 8.936 3.573a1 1 0 0 1 .629.928v16.848a1 1 0 0 1-1.371.927l-8-3.2A1 1 0 0 1 4 19.062V1.739a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1h-2">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m4.552.845 11.636 2.237a1 1 0 0 1 .812.982v16.675a1 1 0 0 1-1 1h-2"></path>
                                </svg></div>
                            <div class="flex-1" bis_skin_checked="1">
                                <h3 class="mb-2 text-blue">Read the Documentation</h3>
                                <p>Get to know Cedar by understanding its capabilities the right way.</p>
                            </div>
                        </a> <a href="https://demo.statamic.com/cp/collections/create"
                            class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group">
                            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800" bis_skin_checked="1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9">
                                    </path>
                                </svg></div>
                            <div class="flex-1" bis_skin_checked="1">
                                <h3 class="mb-2 text-blue">Create a Collection</h3>
                                <p>Collections contain the different types of content in the site.</p>
                            </div>
                        </a> <a href="https://demo.statamic.com/cp/fields/blueprints"
                            class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group">
                            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800" bis_skin_checked="1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <circle cx="4" cy="20" r="3.5" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <circle cx="4" cy="20" r="1.5" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" d="M.5 20V4a3.5 3.5 0 0 1 7 0v16"></path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" d="M4 23.5h18.5a1 1 0 0 0 1-1v-18a1 1 0 0 0-1-1h-15"></path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15.5 18.5H11a.5.5 0 0 1-.5-.5V9.309a.5.5 0 0 1 .724-.447L15.5 11zm0-6H20a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-4.5m-5-6H13m-2.5 2H13m2.5-3.5V8.5m4 4V10m-4 4.5H18m-2.5 2H18">
                                    </path>
                                </svg></div>
                            <div class="flex-1" bis_skin_checked="1">
                                <h3 class="mb-2 text-blue">Create a Blueprint</h3>
                                <p>Blueprints define the custom fields used to create and store content.</p>
                            </div>
                        </a> <a href="https://demo.statamic.com/cp/navigation/create"
                            class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group">
                            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800" bis_skin_checked="1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.505 9.499v2.5m0 2.5v2.5m0-11.499v1a1 1 0 0 0 1 1h1m-2 12v1a1 1 0 0 0 1 1h1M7 7.499h3m-3 14h3m-7.495-21v2.5M20.5 9.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a2.782 2.782 0 0 1 1.707.707l1.586 1.586A2.782 2.782 0 0 1 20.5 4.5z">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M17 .569V3a1 1 0 0 0 1 1h2.429m.071 18.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3.114a2.139 2.139 0 0 1 1.513.627l1.666 1.666A2.782 2.782 0 0 1 20.5 17.5z">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" d="M17 13.536V16a1 1 0 0 0 1 1h2.43"></path>
                                </svg></div>
                            <div class="flex-1" bis_skin_checked="1">
                                <h3 class="mb-2 text-blue">Create a Navigation</h3>
                                <p>Create multi-level lists of links that can be used to render navbars, footers, and so on.
                                </p>
                            </div>
                        </a></div>
                </div>
            </div>
            <div class="widget w-full md:w-full @lg:w-1/2 mb-8 px-4" bis_skin_checked="1">
                <div class="card p-0 overflow-hidden h-full" bis_skin_checked="1">
                    <div class="flex justify-between items-center p-4" bis_skin_checked="1">
                        <h2><a href="https://demo.statamic.com/cp/collections/news" class="flex items-center">
                                <div class="h-6 w-6 rtl:ml-2 ltr:mr-2 text-gray-800" bis_skin_checked="1"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982">
                                        </path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9">
                                        </path>
                                    </svg></div> <span>Latest Articles</span>
                            </a></h2>
                        <div class="dropdown-list inline-block" bis_skin_checked="1">
                            <div aria-haspopup="true" bis_skin_checked="1"><button class="btn-primary"> Create Entry
                                    <!----></button></div>
                            <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                        </div>
                    </div>
                    <div bis_skin_checked="1"><!---->
                        <div bis_skin_checked="1">
                            <table data-size="sm" tabindex="0" class="data-table"><!---->
                                <tbody tabindex="0">
                                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                                        <td class="">
                                            <div class="flex items-center" bis_skin_checked="1">
                                                <div class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600"
                                                    bis_skin_checked="1"></div><a
                                                    href="https://demo.statamic.com/cp/collections/news/entries/9ea4dfb5-e08f-4629-937b-2f35e30ea6a4">1.21
                                                    Jigawatts</a>
                                            </div>
                                        </td><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                                        <td class="">
                                            <div class="flex items-center" bis_skin_checked="1">
                                                <div class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600"
                                                    bis_skin_checked="1"></div><a
                                                    href="https://demo.statamic.com/cp/collections/news/entries/8b56b437-c578-4d14-abe8-5c3c3906204f">FluxTech™
                                                    On Boats?</a>
                                            </div>
                                        </td><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                                        <td class="">
                                            <div class="flex items-center" bis_skin_checked="1">
                                                <div class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600"
                                                    bis_skin_checked="1"></div><a
                                                    href="https://demo.statamic.com/cp/collections/news/entries/a91ff523-7748-4883-841c-bd0e46a8a571">FluxTech™
                                                    opens up FTL travel possibilities</a>
                                            </div>
                                        </td><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                                        <td class="">
                                            <div class="flex items-center" bis_skin_checked="1">
                                                <div class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600"
                                                    bis_skin_checked="1"></div><a
                                                    href="https://demo.statamic.com/cp/collections/news/entries/a5fb1943-fa4b-4449-b5ab-ecaff2832c9f">10
                                                    things we decided at our company retreat</a>
                                            </div>
                                        </td><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                                        <td class="">
                                            <div class="flex items-center" bis_skin_checked="1">
                                                <div class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600"
                                                    bis_skin_checked="1"></div><a
                                                    href="https://demo.statamic.com/cp/collections/news/entries/02ec08a8-fe9c-4d9c-bc52-a4d116e2f3ac">Cost-reducing
                                                    advances in FluxTech™</a>
                                            </div>
                                        </td><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="w-full flex py-2 border-t bg-gray-200 rounded-b-lg text-sm" bis_skin_checked="1">
                                <div class="flex flex-1 items-center" bis_skin_checked="1"><!----></div>
                                <ul class="pagination"><!---->
                                    <li class="current"><a>1</a></li>
                                    <li class=""><a>2</a></li>
                                    <li><a><span class="text-xs">→</span></a></li>
                                </ul>
                                <div class="flex flex-1" bis_skin_checked="1">
                                    <div class="flex-1" bis_skin_checked="1"></div><!---->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget w-full md:w-full @lg:w-1/2 mb-8 px-4" bis_skin_checked="1">
                <div class="card p-0 overflow-hidden" bis_skin_checked="1">
                    <div class="flex justify-between items-center p-4" bis_skin_checked="1">
                        <h2><a href="https://demo.statamic.com/cp/forms/contact" class="flex items-center">
                                <div class="h-6 w-6 rtl:ml-2 ltr:mr-2 text-gray-800" bis_skin_checked="1"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M19.5 14.5v-13a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1v13m19 8a1 1 0 0 1-1 1h-21a1 1 0 0 1-1-1v-6h7v1a2.006 2.006 0 0 0 2 2h5a2.006 2.006 0 0 0 2-2v-1h7zm-23-6 4-6m15 0 4 6m-15-13h1.997m.003 3h5m-7 3h7m-7 3h7">
                                        </path>
                                    </svg></div> <span>Contact Form Submissions</span>
                            </a></h2>
                    </div>
                    <div bis_skin_checked="1">
                        <table class="data-table">
                            <tbody>
                                <tr>
                                    <td><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105792.0463">Marty
                                            McFly</a></td>
                                    <td class="rtl:text-left ltr:text-right">
                                        2022-11-10 18:43
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105730.3186">Lorraine
                                            Baines McFly</a></td>
                                    <td class="rtl:text-left ltr:text-right">
                                        2022-11-10 18:42
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105453.1997">George
                                            McFly</a></td>
                                    <td class="rtl:text-left ltr:text-right">
                                        2022-11-10 18:37
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105347.8293">Dr.
                                            Emmett
                                            Brown</a></td>
                                    <td class="rtl:text-left ltr:text-right">
                                        2022-11-10 18:35
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105195.026">Biff
                                            Tannen</a></td>
                                    <td class="rtl:text-left ltr:text-right">
                                        2022-11-10 18:33
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
