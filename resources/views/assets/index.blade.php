@extends('layouts.main')

@section('title', 'Assets')

@section('content')
<style>
.dragover {
    border-color: #3b82f6;
    background-color: #e0f2fe;
}
</style>
<title>Assets :: Cedar</title>
<div class="page-wrapper max-w-full" bis_skin_checked="1">
    <div class="asset-manager" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Assets</h1>

            <!-- Modal -->
            <div class="modal hidden fixed right-0 top-0 z-2 bg-gray-700 " style="width: 100%; height: 100%;"
                id="modal">
                <div class="m-4" style="width: 98%; height: 98%;">
                    <div class="modal-overlay" id="modal-overlay"></div>
                    <div class="shadow-lg" style="left: 0px; height: 100%;">
                        <div class="asset-editor flex flex-col relative bg-gray-100 h-full rounded is-image">
                            <!---->
                            <div class="flex justify-between w-full px-2 relative" id="asset-editor-header">
                                <button aria-label="Open in a new window"
                                    class="flex items-center p-4 group v-popper--has-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="text-gray-700 h-5 w-5">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M21.75 9V6a1.5 1.5 0 0 0-1.5-1.5h-12V3a1.5 1.5 0 0 0-1.5-1.5h-4.5A1.5 1.5 0 0 0 .75 3v17.8a1.7 1.7 0 0 0 3.336.438l2.351-11.154A1.5 1.5 0 0 1 7.879 9H21.75a1.5 1.5 0 0 1 1.45 1.886l-2.2 10.5a1.5 1.5 0 0 1-1.45 1.114H2.447">
                                        </path>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M9.75 12.375a.375.375 0 1 1-.375.375.375.375 0 0 1 .375-.375m8.629 7.125-2.911-4.365a.75.75 0 0 0-1.238-.015l-2 2.851-1.23-.989a.75.75 0 0 0-1.092.17L8.34 19.5">
                                        </path>
                                    </svg>
                                    <span class="rtl:mr-2 ltr:ml-2 text-sm text-gray-800 group-hover:text-blue">
                                        alec-favale-mzjobxoxbt0-unsplash.jpg
                                    </span>
                                    <svg viewBox="0 0 24 24"
                                        class="align-middle text-gray-700 h-5 w-5 group-hover:text-blue rtl:rotate-180">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                                    </svg>
                                </button>
                                <button aria-label="Close Editor"
                                    class="btn-close absolute top-2 rtl:left-2.5 ltr:right-2.5" id="close-modal">
                                    ×
                                </button>
                            </div>
                            <div class="flex flex-1 flex-col md:flex-row md:justify-between grow overflow-scroll">
                                <div
                                    class="editor-preview bg-gray-800 rtl:md:rounded-tl-md ltr:md:rounded-tr-md flex flex-col justify-between flex-1 min-h-[45vh] md:min-h-auto md:flex-auto md:grow w-full md:w-1/2 lg:w-2/3 shadow-[inset_0px_4px_3px_0px_black]">
                                    <div id="asset-editor-toolbar"
                                        class="@container/toolbar flex items-center justify-center py-4 px-2 text-2xs text-white text-center space-x-1 sm:space-x-3">
                                        <button type="button"
                                            class="flex bg-gray-750 hover:bg-gray-900 hover:text-yellow-light rounded items-center justify-center px-3 py-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                class="h-4">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M4.185 1.802A.75.75 0 0 0 4.04.31C3.363.375 2.7.455 2.067.54A1.742 1.742 0 0 0 .566 2.05a60.89 60.89 0 0 0-.219 1.953.75.75 0 1 0 1.494.141c.061-.65.136-1.29.213-1.907.014-.11.1-.196.208-.21.624-.083 1.268-.16 1.923-.223ZM7 9.506a2.506 2.506 0 1 0 0-5.012 2.506 2.506 0 0 0 0 5.012Zm5.924-.326a.75.75 0 0 1 .676.818 64.96 64.96 0 0 1-.218 1.952 1.742 1.742 0 0 1-1.501 1.512 57.69 57.69 0 0 1-1.974.229.75.75 0 0 1-.144-1.494 56.252 56.252 0 0 0 1.923-.222.242.242 0 0 0 .208-.21c.077-.619.151-1.257.213-1.908a.75.75 0 0 1 .817-.677ZM9.088.984a.75.75 0 0 1 .819-.675c.678.066 1.34.146 1.974.23a1.742 1.742 0 0 1 1.501 1.51c.078.626.155 1.281.218 1.953a.75.75 0 0 1-1.493.141 63.86 63.86 0 0 0-.213-1.907.242.242 0 0 0-.208-.21 56.154 56.154 0 0 0-1.923-.223.75.75 0 0 1-.675-.819ZM1.841 9.857a.75.75 0 0 0-1.494.14c.064.673.14 1.328.219 1.953a1.742 1.742 0 0 0 1.5 1.512c.635.083 1.297.163 1.975.229a.75.75 0 0 0 .144-1.494 56.272 56.272 0 0 1-1.923-.222.242.242 0 0 1-.208-.21 63.578 63.578 0 0 1-.213-1.908Z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            <span class="rtl:mr-2 ltr:ml-2 hidden @3xl/toolbar:inline-block">Focal
                                                Point</span>
                                        </button>
                                        <button type="button" id="open-modal-1"
                                            class="flex bg-gray-750 hover:bg-gray-900 hover:text-yellow-light rounded items-center px-3 py-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                class="h-4">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M3.5.12a.75.75 0 0 0 0 1.5H5c.345 0 .668.13.9.348.23.217.35.502.35.788v4.437H4.5a.75.75 0 0 0 0 1.5h1.75v2.551c0 .287-.12.571-.35.788a1.313 1.313 0 0 1-.9.348H3.5a.75.75 0 0 0 0 1.5H5a2.813 2.813 0 0 0 2-.826l.071.07A2.813 2.813 0 0 0 9 13.88h1.5a.75.75 0 0 0 0-1.5H9c-.345 0-.668-.13-.9-.348a1.084 1.084 0 0 1-.35-.788v-2.55H9.5a.75.75 0 0 0 0-1.5H7.75V2.755c0-.286.12-.57.35-.788.232-.218.555-.348.9-.348h1.5a.75.75 0 0 0 0-1.5H9a2.813 2.813 0 0 0-2 .827A2.813 2.813 0 0 0 5 .12H3.5Z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            <span
                                                class="rtl:mr-2 ltr:ml-2 hidden @3xl/toolbar:inline-block">Rename</span>
                                        </button>
                                        <button type="button" id="open-modal-2"
                                            class="flex bg-gray-750 hover:bg-gray-900 hover:text-yellow-light rounded items-center px-3 py-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                class="h-4">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M3.381.62A49.93 49.93 0 0 1 7 .5c.452 0 .875.004 1.28.013.504.011.998.178 1.403.49 1.196.924 1.928 1.704 2.832 2.935.293.399.451.877.464 1.366a67.276 67.276 0 0 1-.106 5.811 2.423 2.423 0 0 1-2.254 2.265c-1.145.079-2.25.12-3.619.12-1.368 0-2.474-.041-3.619-.12a2.423 2.423 0 0 1-2.254-2.265A65.804 65.804 0 0 1 1 7c0-1.41.044-2.786.127-4.115A2.423 2.423 0 0 1 3.381.62Zm2.166 7.545-.868-.869a.5.5 0 0 0-.852.305c-.107 1.077-.107 1.686 0 2.721a.5.5 0 0 0 .446.446c1.036.107 1.644.107 2.722 0a.5.5 0 0 0 .304-.851l-.868-.868 1.793-1.793a.625.625 0 1 0-.884-.884L5.547 8.165Z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            <span class="rtl:mr-2 ltr:ml-2 hidden @3xl/toolbar:inline-block">Move</span>
                                        </button>
                                        <button type="button" id="open-modal-3"
                                            class="flex bg-gray-750 hover:bg-gray-900 hover:text-yellow-light rounded items-center px-3 py-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                class="h-4">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M11.05 9.624c-.166.065-.339-.069-.36-.245a1.999 1.999 0 0 0-.35-.91 9.1 9.1 0 0 0-1.734-1.9 2.47 2.47 0 0 0-1.647-.597 2.47 2.47 0 0 0-1.565.598 9.1 9.1 0 0 0-1.735 1.9 1.998 1.998 0 0 0-.328.775c-.032.17-.207.29-.366.222a5.34 5.34 0 0 1-1.375-.825A3.116 3.116 0 0 1 .503 6.49a3.1 3.1 0 0 1 .784-2.276c.277-.31.613-.564.99-.747a3.251 3.251 0 0 1 1.205-.319h.01l.036.001c.483 0 .956.16 1.348.406.4.25.668.558.78.796a.625.625 0 1 0 1.131-.53c-.238-.508-.698-.982-1.248-1.325a4.018 4.018 0 0 0-.895-.418c-.175-.056-.252-.27-.126-.404.23-.242.493-.456.784-.634a3.941 3.941 0 0 1 4.84.575 3.77 3.77 0 0 1 1.079 2.303.247.247 0 0 0 .173.197 2.74 2.74 0 0 1 1.611 1.067 2.644 2.644 0 0 1-.409 3.541c-.417.368-.945.667-1.546.901ZM7.015 7.222a.832.832 0 0 0-.028 0 1.222 1.222 0 0 0-.782.298c-.563.48-.961.87-1.523 1.668a.75.75 0 0 0 .614 1.182h.954v2.576a.75.75 0 0 0 1.5 0V10.37h.955a.75.75 0 0 0 .613-1.182A7.868 7.868 0 0 0 7.795 7.52a1.222 1.222 0 0 0-.78-.298Z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            <span
                                                class="rtl:mr-2 ltr:ml-2 hidden @3xl/toolbar:inline-block">Reupload</span>
                                        </button>
                                        <button aria-label="Download file"
                                            class="flex bg-gray-750 hover:bg-gray-900 hover:text-yellow-light rounded items-center px-3 py-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                class="h-4">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M6.25 5.614H4.948a.5.5 0 0 0-.394.808c.655.838 1.113 1.237 1.771 1.742.403.309.947.309 1.35 0 .658-.505 1.116-.904 1.771-1.742a.5.5 0 0 0-.393-.808H7.75V.767a.75.75 0 1 0-1.5 0v4.847ZM4.053 2.3A.75.75 0 0 0 3.947.804C3.394.843 2.848.904 2.33 1A2.35 2.35 0 0 0 .488 2.766C.25 3.748.25 4.51.25 5.92v.127c0 1.41 0 2.172.238 3.154a2.35 2.35 0 0 0 1.842 1.765c1.206.227 2.598.261 3.92.267v1.25H5a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5H7.75v-1.25c1.322-.006 2.713-.04 3.92-.267a2.35 2.35 0 0 0 1.842-1.765c.238-.982.238-1.744.238-3.154V5.92c0-1.41 0-2.172-.238-3.154A2.35 2.35 0 0 0 11.67 1a14.22 14.22 0 0 0-1.617-.197.75.75 0 1 0-.106 1.496 12.81 12.81 0 0 1 1.446.175.85.85 0 0 1 .661.645c.192.792.196 1.379.196 2.864 0 1.485-.004 2.071-.196 2.863a.85.85 0 0 1-.66.645c-1.251.235-2.768.241-4.312.242a.76.76 0 0 0-.164 0c-1.544 0-3.06-.007-4.311-.242a.85.85 0 0 1-.661-.645c-.192-.792-.196-1.378-.196-2.863s.004-2.072.196-2.864a.85.85 0 0 1 .66-.645c.446-.083.931-.139 1.447-.175Z"
                                                    clip-rule="evenodd">
                                                </path>
                                            </svg>
                                            <span class="rtl:mr-2 ltr:ml-2 hidden @3xl/toolbar:inline-block">
                                                <a href="{{ asset('/imgs/new.jpg') }}" download="cedar-image.jpg" class="download-button text-white">Download</a>
                                            </span>
                                        </button>
                                    </div>
                                    <div>
                                        <div class="modal hidden absolute z-2" id="modal-1">
                                            <div class="modal-overlays" id="modal-overlays"></div>
                                            <div aria-expanded="true" role="dialog" aria-modal="true" class="vm--modal"
                                                style="left: 50%; width: 600px; height: auto; top: 5px">
                                                <div class="confirmation-modal flex flex-col h-full">
                                                    <header
                                                        class="text-lg font-semibold px-5 py-3 bg-gray-200 rounded-t-lg flex items-center justify-between border-b">
                                                        Rename </header>
                                                    <div class="flex-1 px-5 py-6 text-gray">
                                                        <div class="mb-4">Are you sure you want to rename this asset?
                                                        </div>
                                                        <!---->
                                                        <div class="publish-fields @container">
                                                            <div
                                                                class="form-group publish-field publish-field__filename text-fieldtype w-full mousetrap">
                                                                <div class="field-inner"><label for="field_filename"
                                                                        class="publish-field-label"><span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Filename</span><i
                                                                            class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                        <!---->
                                                                        <!---->
                                                                        <!----><button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg></button><button class="outline-none"
                                                                            style="display: none;"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg></button>
                                                                    </label>
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                                <div class="flex items-center">
                                                                    <div class="input-group">
                                                                        <!----><input id="field_filename"
                                                                            name="filename" type="text"
                                                                            placeholder="alec-favale-mzjobxoxbt0-unsplash"
                                                                            autofocus="autofocus"
                                                                            class="input-text mousetrap">
                                                                        <!---->
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="px-5 py-3 bg-gray-200 rounded-b-lg border-t flex items-center justify-end text-sm">
                                                        <button type="button" id="close-modal-1"
                                                            class="text-gray hover:text-gray-900">Cancel</button><button
                                                            class="rtl:mr-4 ltr:ml-4 btn-primary">Rename Asset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal hidden absolute z-2" id="modal-2">
                                            <div class="modal-overlays" id="modal-overlays"></div>
                                            <div aria-expanded="true" role="dialog" aria-modal="true" class="vm--modal"
                                                style="left: 50%; width: 600px; height: auto; top: 5px">
                                                <div class="confirmation-modal flex flex-col h-full">
                                                    <div class="confirmation-modal flex flex-col h-full">
                                                        <header
                                                            class="text-lg font-semibold px-5 py-3 bg-gray-200 rounded-t-lg flex items-center justify-between border-b">
                                                            Move </header>
                                                        <div class="flex-1 px-5 py-6 text-gray">
                                                            <div class="mb-4">Are you sure you want to move this asset?
                                                            </div>
                                                            <!---->
                                                            <div class="publish-fields @container">
                                                                <div
                                                                    class="form-group publish-field publish-field__folder select-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_folder"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Folder</span><i
                                                                                class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                            <!---->
                                                                            <!---->
                                                                            <!----><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button
                                                                                class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button>
                                                                        </label>
                                                                        <!---->
                                                                    </div>
                                                                    <!---->
                                                                    <div data-v-288ded3d="" class="flex">
                                                                        <div data-v-288ded3d="" dir="auto"
                                                                            class="v-select flex-1 vs--single vs--searchable"
                                                                            name="folder">
                                                                            <div id="vs1__combobox" role="combobox"
                                                                                aria-expanded="false"
                                                                                aria-owns="vs1__listbox"
                                                                                aria-label="Search for option"
                                                                                class="vs__dropdown-toggle">
                                                                                <div class="vs__selected-options">
                                                                                    <input id="field_folder"
                                                                                        aria-autocomplete="list"
                                                                                        aria-labelledby="vs1__combobox"
                                                                                        aria-controls="vs1__listbox"
                                                                                        type="search" autocomplete="off"
                                                                                        class="vs__search">
                                                                                </div>
                                                                                <div class="vs__actions"><button
                                                                                        type="button"
                                                                                        title="Clear Selected"
                                                                                        aria-label="Clear Selected"
                                                                                        class="vs__clear"
                                                                                        style="display: none;"><span>×</span></button>
                                                                                    <span
                                                                                        class="toggle vs__open-indicator"
                                                                                        role="presentation"><svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            height="16" width="16"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="currentColor"
                                                                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                            </path>
                                                                                        </svg></span>
                                                                                    <div class="vs__spinner"
                                                                                        style="display: none;">
                                                                                        Loading...
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <ul id="vs1__listbox" role="listbox"
                                                                                style="display: none; visibility: hidden;">
                                                                            </ul>
                                                                        </div>
                                                                        <!---->
                                                                    </div>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="px-5 py-3 bg-gray-200 rounded-b-lg border-t flex items-center justify-end text-sm">
                                                            <button type="button" id="close-modal-2"
                                                                class="text-gray hover:text-gray-900">Cancel</button>
                                                            <button class="rtl:mr-4 ltr:ml-4 btn-primary">Move
                                                                Asset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal hidden absolute z-2" id="modal-3">
                                            <div class="modal-overlays" id="modal-overlays"></div>
                                            <div aria-expanded="true" role="dialog" aria-modal="true" class="vm--modal"
                                                style="left: 50%; width: 600px; height: auto; top: 5px">
                                                <div class="confirmation-modal flex flex-col h-full">
                                                    <header
                                                        class="text-lg font-semibold px-5 py-3 bg-gray-200 rounded-t-lg flex items-center justify-between border-b">
                                                        Reupload
                                                    </header>
                                                    <div class="flex-1 px-5 py-6 text-gray">
                                                        <div class="mb-4">Are you sure you want to reupload this asset?
                                                        </div>
                                                        <div class="text-red-500 mb-4">You may encounter browser or
                                                            server-level
                                                            caching issues. You may prefer to replace the asset instead.
                                                        </div>
                                                        <div class="publish-fields @container">
                                                            <div
                                                                class="form-group publish-field publish-field__file files-fieldtype w-full">
                                                                <div class="field-inner">
                                                                    <label for="field_file" class="publish-field-label">
                                                                        <span
                                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">File</span>
                                                                        <i class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                        <button class="outline-none"
                                                                            style="display: none;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                        <button class="outline-none"
                                                                            style="display: none;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                <path fill="none" stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </label>
                                                                </div>
                                                                <div class="assets-fieldtype">
                                                                    <div>
                                                                        <div>
                                                                            <input type="file" multiple="multiple"
                                                                                class="hidden">
                                                                            <div
                                                                                class="assets-fieldtype-drag-container">
                                                                                <div class="drag-notification"
                                                                                    style="display: none;">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-8 w-8 rtl:ml-6 ltr:mr-6">
                                                                                        <path fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span>Drop File to Upload</span>
                                                                                </div>
                                                                                <div>
                                                                                    <form>
                                                                                        <div id="drop-area"
                                                                                            class="p-4 border-2 border-dashed border-gray-700 rounded-sm text-center cursor-pointer text-gray-600 font-medium">
                                                                                            <p class="text-gray-500">
                                                                                                Drag & Drop your file
                                                                                                here or click to select
                                                                                                a file</p>
                                                                                            <input type="file" id="file"
                                                                                                name="file"
                                                                                                class="hidden">
                                                                                        </div>
                                                                                    </form>
                                                                                    <div id="file-info"
                                                                                        class="hidden mt-4 p-1 border rounded-md bg-gray-50">
                                                                                        <div class="flex items-center">
                                                                                            <div id="file-icon"
                                                                                                class="mr-4"></div>
                                                                                            <div>
                                                                                                <span id="file-name"
                                                                                                    class="text-gray-700 text-xl mr-2"></span>
                                                                                                <span id="file-size"
                                                                                                    class="text-gray-500 text-md"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="px-5 py-3 bg-gray-200 rounded-b-lg border-t flex items-center justify-end text-sm">
                                                        <button type="button" id="close-modal-3"
                                                            class="text-gray hover:text-gray-900">Cancel</button>
                                                        <button class="rtl:mr-4 ltr:ml-4 btn-primary">Reupload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor-preview-image">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('/imgs/new.jpg') }}" class="asset-thumb">
                                        </div>
                                        {{-- else this icon
                                            <div class="image-wrapper">
                                                <img src="Photo%20edit%20Assets%20%E2%80%B9%20Assets%20%E2%80%B9%20Statamic_files/alec-favale-mzjobxoxbt0-unsplash.jpg" class="asset-thumb">
                                            </div>
                                        --}}
                                    </div>
                                </div>
                                <div class="w-full sm:p-4 md:pt-px md:w-1/3 md:grow overflow-scroll">
                                    <!---->
                                    <!---->
                                    <div class="publish-sections">
                                        <div class="publish-sections-section">
                                            <div class="p-0 card">
                                                <!---->
                                                <div class="publish-fields @container">
                                                    <div
                                                        class="form-group publish-field publish-field__alt text-fieldtype w-full">
                                                        <div class="field-inner"><label for="field_alt"
                                                                class="publish-field-label"><span
                                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Alt
                                                                    Text</span>
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!----><button class="outline-none"
                                                                    style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                        </path>
                                                                    </svg></button><button class="outline-none"
                                                                    style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                        </path>
                                                                    </svg></button>
                                                            </label>
                                                            <div class="help-block -mt-2">
                                                                <p>Description of the image</p>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                        <div class="flex items-center">
                                                            <div class="input-group">
                                                                <!----><input id="field_alt" name="alt" type="text"
                                                                    autofocus="autofocus" class="input-text">
                                                                <!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-200 w-full border-t flex items-center justify-end py-3 px-4 rounded-b">
                                <div id="asset-meta-data"
                                    class="flex-1 hidden sm:flex space-x-3 py-1 h-full text-xs text-gray-800">
                                    <div
                                        class="flex items-center bg-gray-400 rounded py-1 rtl:pr-2 ltr:pl-2 rtl:pl-3 ltr:pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                            class="h-3 rtl:ml-2 ltr:mr-2">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M3.824.583C4.837.47 5.904.37 7 .37c1.097 0 2.163.1 3.176.213a3.696 3.696 0 0 1 3.252 3.262c.108 1.008.202 2.067.202 3.155 0 1.088-.094 2.147-.202 3.155a3.696 3.696 0 0 1-3.252 3.262c-1.013.113-2.08.213-3.176.213s-2.163-.1-3.176-.213a3.696 3.696 0 0 1-3.252-3.262C.464 9.147.37 8.088.37 7c0-1.088.094-2.147.202-3.155A3.696 3.696 0 0 1 3.824.583Zm6.724 3.669a1.446 1.446 0 1 1-2.893 0 1.446 1.446 0 0 1 2.893 0Zm-6.196 7.711c-1.159-.146-2.092-1.206-2.216-2.523a39.527 39.527 0 0 1-.147-2.015.464.464 0 0 1 .412-.489 5.59 5.59 0 0 1 .564-.027c1.405-.036 2.775.496 3.866 1.5.883.814 1.537 1.895 1.892 3.108a.465.465 0 0 1-.417.59 15.7 15.7 0 0 1-1.308.059c-.9 0-1.785-.094-2.646-.203Zm5.737-.103c-.136.046-.274-.05-.301-.19-.14-.726-.43-1.622-.957-2.405-.1-.147-.033-.353.14-.392a5.62 5.62 0 0 1 2.738.07c.113.031.184.14.174.257l-.022.24c-.108 1.144-.826 2.093-1.772 2.42Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>3376 x 6000</div>
                                    </div>
                                    <div
                                        class="flex items-center bg-gray-400 rounded py-1 rtl:pr-2 ltr:pl-2 rtl:pl-3 ltr:pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                            class="h-3 rtl:ml-2 ltr:mr-2">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M10.21.845C8.556.69 7.08.638 5.128.833a1.484 1.484 0 0 0-.917.446l-2.25 2.326a1.476 1.476 0 0 0-.413.902c-.183 2.185-.038 4.298.146 6.414a2.466 2.466 0 0 0 2.273 2.255 40.84 40.84 0 0 0 6.198 0 2.425 2.425 0 0 0 2.25-2.27 61.8 61.8 0 0 0-.003-7.79l-.5.031.5-.031A2.435 2.435 0 0 0 10.21.846Zm-3.526 1.98c.345 0 .625.28.625.625v1.687a.625.625 0 1 1-1.25 0V3.45c0-.345.28-.625.625-.625Zm3.176.625a.625.625 0 1 0-1.25 0v1.687a.625.625 0 0 0 1.25 0V3.45Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>2.14 MB</div>
                                    </div>
                                    <div
                                        class="flex items-center bg-gray-400 rounded py-1 rtl:pr-2 ltr:pl-2 rtl:pl-3 ltr:pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                            class="h-3 rtl:ml-2 ltr:mr-2">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M9.625.702a5.25 5.25 0 0 0-7.171 1.922.75.75 0 1 0 1.299.75A3.75 3.75 0 0 1 8.875 2a.75.75 0 1 0 .75-1.299Zm1.116 2.435a.75.75 0 0 1 1 .355c.332.7.509 1.47.509 2.257V8.75A5.251 5.251 0 0 1 7 14a.75.75 0 0 1 0-1.5 3.75 3.75 0 0 0 3.75-3.75V5.749a3.75 3.75 0 0 0-.364-1.612.75.75 0 0 1 .355-1ZM2.5 5.498a.75.75 0 0 1 .75.75v2.503a3.75 3.75 0 0 0 1.35 2.884.75.75 0 0 1-.959 1.152A5.247 5.247 0 0 1 1.75 8.751V6.248a.75.75 0 0 1 .75-.75Zm4.574-.847a.89.89 0 0 0-.394-.008.75.75 0 1 1-.305-1.469A2.39 2.39 0 0 1 9.25 5.54v1.048a.75.75 0 1 1-1.5 0V5.525a.89.89 0 0 0-.676-.874Zm-1.09 2.384a.75.75 0 0 0-1.5 0v1.8A2.383 2.383 0 0 0 8.64 10.46a.75.75 0 0 0-1.116-1.002.883.883 0 0 1-1.54-.604V7.035Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div title="2022-11-10">1 year ago</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <button type="button"
                                        class="btn text-gray-600 hover:text-gray-900 transition duration-300 ease-in-out"
                                        id="close-modal">
                                        Cancel
                                    </button>
                                    <button type="button" class="btn-primary"> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-screen" bis_skin_checked="1">
            <div bis_skin_checked="1">
                <div class="" bis_skin_checked="1"><input type="file" multiple="multiple" class="hidden">
                    <div class="min-h-screen" bis_skin_checked="1">
                        <div class="drag-notification" style="display: none;" bis_skin_checked="1"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 w-12 m-4">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                </path>
                            </svg><span>Drop File to Upload</span></div>
                        <!---->
                        <div class="mode-table" bis_skin_checked="1">
                            <div class="card overflow-hidden p-0" bis_skin_checked="1">
                                <div class="relative w-full" bis_skin_checked="1">
                                    <div class="flex items-center justify-between p-2 text-sm" bis_skin_checked="1">
                                        <input type="text" placeholder="Search..." autofocus="autofocus"
                                            class="input-text flex-1 bg-white text-sm focus:border-blue-300 outline-0 h-8"
                                            data-listener-added_d1ab792c="true"><button
                                            class="btn btn-sm rtl:mr-3 ltr:ml-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" class="h-4 w-4 rtl:ml-2 ltr:mr-2">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M8.25 18.75H2.447M20.25 8.25v-3a1.5 1.5 0 0 0-1.5-1.5H8.25v-1.5a1.5 1.5 0 0 0-1.5-1.5h-4.5a1.5 1.5 0 0 0-1.5 1.5v14.8a1.7 1.7 0 0 0 3.336.438l2.351-8.154A1.5 1.5 0 0 1 7.879 8.25H21.75a1.5 1.5 0 0 1 1.45 1.886">
                                                </path>
                                                <circle cx="17.25" cy="17.25" r="6" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                </circle>
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M17.25 14.25v6m-3-3h6"></path>
                                            </svg><span>Create Folder</span></button><button
                                            class="btn btn-sm rtl:mr-3 ltr:ml-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" class="h-4 w-4 rtl:ml-2 ltr:mr-2 text-current">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                                </path>
                                            </svg><span>Upload</span></button>
                                        <div class="btn-group rtl:mr-3 ltr:ml-3" bis_skin_checked="1"><button
                                                class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" class="h-4 w-4">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5">
                                                        <rect width="9.75" height="9.75" x=".75" y="13.5" rx="1" ry="1">
                                                        </rect>
                                                        <path d="M.75 19.5h9.75"></path>
                                                        <rect width="9.75" height="9.75" x=".75" y=".75" rx="1" ry="1">
                                                        </rect>
                                                        <path d="M.75 6.75h9.75"></path>
                                                        <rect width="9.75" height="9.75" x="13.5" y=".75" rx="1" ry="1">
                                                        </rect>
                                                        <path d="M13.5 6.75h9.75"></path>
                                                        <rect width="9.75" height="9.75" x="13.5" y="13.5" rx="1"
                                                            ry="1"></rect>
                                                        <path d="M13.5 19.5h9.75"></path>
                                                    </g>
                                                </svg></button><button class="btn btn-sm active"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M8.25 3.748h15m-15 9h15m-15 9h15"></path>
                                                    <rect width="4.5" height="4.5" x=".75" y=".748" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" rx=".75" ry=".75">
                                                    </rect>
                                                    <rect width="4.5" height="4.5" x=".75" y="9.748" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" rx=".75" ry=".75">
                                                    </rect>
                                                    <rect width="4.5" height="4.5" x=".75" y="18.748" fill="none"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" rx=".75" ry=".75">
                                                    </rect>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="px-4 py-2 flex flex-wrap text-sm bg-gray-200 border-t border-b shadow-inner"
                                        bis_skin_checked="1"><a class="group flex items-center">
                                            <!----><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="rtl:ml-2 ltr:mr-2 h-5 w-5 text-blue-400 group-hover:text-blue-600">
                                                <path fill="currentColor"
                                                    d="M24 6a1.5 1.5 0 0 0-1.5-1.5H11.74a.5.5 0 0 1-.45-.28l-.95-1.89A1.5 1.5 0 0 0 9 1.5H1.5A1.5 1.5 0 0 0 0 3v18a1.5 1.5 0 0 0 1.5 1.5h21A1.5 1.5 0 0 0 24 21Zm-7.52 7.28a.35.35 0 0 1-.32.22h-.91a.25.25 0 0 0-.25.25V17a.5.5 0 0 1-.5.5H9a.5.5 0 0 1-.5-.5v-3.25a.25.25 0 0 0-.25-.25h-.91a.35.35 0 0 1-.34-.22.33.33 0 0 1 .1-.37l4.41-3.83a.33.33 0 0 1 .44 0l4.41 3.83a.33.33 0 0 1 .12.37Z">
                                                </path>
                                            </svg>
                                            <!---->
                                        </a></div>
                                    <!---->
                                </div>
                                <!---->
                                <div class="overflow-x-auto overflow-y-hidden" bis_skin_checked="1">
                                    <table data-size="sm" tabindex="0" class="data-table">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column"><label for="checkerOfAllBoxes"
                                                        class="flex items-center justify-center relative cursor-pointer"><input
                                                            type="checkbox" id="checkerOfAllBoxes"
                                                            class="relative top-0"></label></th>
                                                <th class="group current-column sortable-column"><span>File</span><svg
                                                        height="8" width="8" viewBox="0 0 10 6.5"
                                                        class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc pointer-events-none">
                                                        <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg></th>
                                                <th class="group sortable-column"><span>Size</span><svg height="8"
                                                        width="8" viewBox="0 0 10 6.5"
                                                        class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                                        <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg></th>
                                                <th class="group sortable-column"><span>Last Modified</span><svg
                                                        height="8" width="8" viewBox="0 0 10 6.5"
                                                        class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                                        <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                            fill="currentColor">
                                                        </path>
                                                    </svg></th>
                                                <!---->
                                                <th class="actions-column"></th>
                                            </tr>
                                        </thead>
                                        <tbody tabindex="0">
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::alec-favale-mzjobxoxbt0-unsplash.jpg"
                                                        value="assets::alec-favale-mzjobxoxbt0-unsplash.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img src="{{ asset('/imgs/new.jpg') }}"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div>
                                                        <label
                                                            for="checkbox-assets::alec-favale-mzjobxoxbt0-unsplash.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            alec-favale-mzjobxoxbt0-unsplash.jpg
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">2 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::bill-jelen-nvwyn8gamck-unsplash.jpg"
                                                        value="assets::bill-jelen-nvwyn8gamck-unsplash.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(1)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::bill-jelen-nvwyn8gamck-unsplash.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            bill-jelen-nvwyn8gamck-unsplash.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">2 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::boat.jpg" value="assets::boat.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpib2F0LmpwZw==/small"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label for="checkbox-assets::boat.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            boat.jpg
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">318 KB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::burning-tracks.jpg"
                                                        value="assets::burning-tracks.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(2)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label for="checkbox-assets::burning-tracks.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            burning-tracks.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">362 KB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::cleanshot-2022-09-13-at-15.49.18@2x.png"
                                                        value="assets::cleanshot-2022-09-13-at-15.49.18@2x.png"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(3)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::cleanshot-2022-09-13-at-15.49.18@2x.png"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            cleanshot-2022-09-13-at-15.49.18@2x.png </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">2 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::david.jpg" value="assets::david.jpg">
                                                </th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(4)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label for="checkbox-assets::david.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            david.jpg
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">41 KB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"
                                                        value="assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpoYXNuYWluLXNpa29yYS00MW5zZW1hYjFwcy11bnNwbGFzaC5qcGc=/small"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            hasnain-sikora-41nsemab1ps-unsplash.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">1 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::jack-pimped-md.jpg"
                                                        value="assets::jack-pimped-md.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpqYWNrLXBpbXBlZC1tZC5qcGc=/small"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label for="checkbox-assets::jack-pimped-md.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            jack-pimped-md.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">310 KB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::jason-leung-pslig2e_gaw-unsplash.jpg"
                                                        value="assets::jason-leung-pslig2e_gaw-unsplash.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(5)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::jason-leung-pslig2e_gaw-unsplash.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            jason-leung-pslig2e_gaw-unsplash.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">2 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"
                                                        value="assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(6)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            joel-muniz-y6ct3a-rj68-unsplash.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">2 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::kira.png" value="assets::kira.png"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpraXJhLnBuZw==/small"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label for="checkbox-assets::kira.png"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            kira.png
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">1 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::photo-1454779132693-e5cd0a216ed3.jpg"
                                                        value="assets::photo-1454779132693-e5cd0a216ed3.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpwaG90by0xNDU0Nzc5MTMyNjkzLWU1Y2QwYTIxNmVkMy5qcGc=/small"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::photo-1454779132693-e5cd0a216ed3.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            photo-1454779132693-e5cd0a216ed3.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">5 MB</div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr class="sortable-row outline-none" tabindex="0">
                                                <!---->
                                                <th class="checkbox-column"><input type="checkbox"
                                                        id="checkbox-assets::photo-1542718610-a1d656d1884c.jpg"
                                                        value="assets::photo-1542718610-a1d656d1884c.jpg"></th>
                                                <td class="">
                                                    <div class="flex items-center w-fit-content group" id="open-modal"
                                                        bis_skin_checked="1">
                                                        <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                            bis_skin_checked="1"><img
                                                                src="./Assets ‹ Assets ‹ Statamic_files/small(7)"
                                                                loading="lazy"
                                                                class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                        </div><label
                                                            for="checkbox-assets::photo-1542718610-a1d656d1884c.jpg"
                                                            class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                            photo-1542718610-a1d656d1884c.jpg </label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="size" values="[object Object]" class=""
                                                            bis_skin_checked="1">11 MB
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div bis_skin_checked="1">
                                                        <div handle="last_modified" values="[object Object]" class=""
                                                            bis_skin_checked="1">1
                                                            year ago</div>
                                                    </div>
                                                </td>
                                                <!---->
                                                <th class="actions-column">
                                                    <div class="dropdown-list" bis_skin_checked="1">
                                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                aria-label="Open Dropdown"
                                                                class="rotating-dots-button"><svg width="12"
                                                                    viewBox="0 0 24 24"
                                                                    class="rotating-dots fill-current">
                                                                    <circle cx="3" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="12" cy="12" r="3">
                                                                    </circle>
                                                                    <circle cx="21" cy="12" r="3">
                                                                    </circle>
                                                                </svg></button></div>
                                                        <div class="v-portal" style="display: none;"
                                                            bis_skin_checked="1"></div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!---->
                                <!---->
                            </div>
                            <div class="w-full flex mt-6" bis_skin_checked="1">
                                <div class="flex flex-1 items-center" bis_skin_checked="1">
                                    <!---->
                                </div>
                                <!---->
                                <div class="flex flex-1" bis_skin_checked="1">
                                    <div class="flex-1" bis_skin_checked="1"></div>
                                    <div class="select-input-container rtl:mr-6 ltr:ml-6" bis_skin_checked="1"><select
                                            name="perPage" class="select-input">
                                            <option value="" disabled="disabled">Per Page</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="500">500</option>
                                        </select>
                                        <div class="select-input-toggle" bis_skin_checked="1"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                </path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
        </div>
    </div>
</div>
<script type="module" src="{{ asset('js/asset-index-js.js') }}"></script>
@endsection