@props(['buttonText'])

<div>
    <button type="button" data-hs-overlay="#hs-overlay">{{ $buttonText }}</button>
    <div id="hs-overlay"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-14 right-0 transition-all duration-300 transform h-full max-w-sm w-full z-1 bg-white border-s shadow-xl"
        tabindex="-1">
        <div class="bg-gray-100 flex flex-col" style="height: 94%;">
            <header
                class="bg-white rtl:pr-6 ltr:pl-6 rtl:pl-3 ltr:pr-3 py-2 mb-4 border-b shadow-md text-lg font-medium flex items-center justify-between">
                Nav Item <button type="button" id="closeBtn" class="btn-close">×</button>
            </header>
            <div class="flex-1 overflow-auto px-1">
                <div class="px-2">

                    <div class="publish-sections">
                        <div class="publish-sections-section">
                            <div class="p-0 card">

                                <div class="publish-fields @container">
                                    <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                        <div class="field-inner">
                                            <label for="field_title" class="publish-field-label"><span
                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span>
                                                <button class="outline-none" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                        </path>
                                                    </svg></button><button class="outline-none"
                                                    style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                        </path>
                                                    </svg></button>
                                            </label>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="input-group">
                                                <input id="field_title" name="title" type="text" autofocus="autofocus"
                                                    class="input-text">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group publish-field publish-field__url text-fieldtype w-full">
                                        <div class="field-inner">
                                            <label for="field_url" class="publish-field-label"><span
                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">URL</span>
                                                <button class="outline-none" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                        </path>
                                                    </svg></button><button class="outline-none"
                                                    style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                        </path>
                                                    </svg></button>
                                            </label>
                                            <div class="help-block -mt-2">
                                                <p>Enter any
                                                    internal or
                                                    external URL.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <div class="input-group">
                                                <input id="field_url" name="url" type="text" class="input-text">
                                            </div>
                                        </div>

                                    </div>
                                    <div
                                        class="form-group publish-field publish-field__external toggle-fieldtype w-full">
                                        <div class="field-inner">
                                            <label for="field_external" class="publish-field-label"><span
                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Open
                                                    in a new
                                                    window</span>
                                                <button class="outline-none" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                        </path>
                                                    </svg></button><button class="outline-none"
                                                    style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24"
                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                        </path>
                                                    </svg></button>
                                            </label>

                                        </div>

                                        <div class="toggle-fieldtype-wrapper">
                                            <button type="button" aria-pressed="true" aria-label="Toggle Button"
                                                class="toggle-container on" id="field_external">
                                                <div class="toggle-slider">
                                                    <div tabindex="0" class="toggle-knob">
                                                    </div>
                                                </div>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-200 p-4 border-t flex items-center justify-between flex-row-reverse">
                <div><button class="btn rtl:ml-2 ltr:mr-2">Cancel</button><button class="btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>