@props(['buttonText'])

<div>
    <button type="button" data-hs-overlay="#hs-overlay" class="btn w-full flex justify-center items-center"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="rtl:ml-2 ltr:mr-2 w-4 h-4">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                d="M11 18.5H1.5a1 1 0 0 1-1-1v-16a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v9.965"></path>
            <rect width="13" height="5" x="2.5" y="2.5" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" rx=".5" ry=".5"></rect>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                d="M2.5 10v6a.5.5 0 0 0 .5.5h6.337a.5.5 0 0 0 .481-.637l-1.714-6a.5.5 0 0 0-.481-.363H3a.5.5 0 0 0-.5.5zm13 3.5V10a.5.5 0 0 0-.5-.5h-3.837a.5.5 0 0 0-.481.637L12.5 16.5h.458m2.742 5.8-4.2 1.2 1.2-4.2 7.179-7.179a2.121 2.121 0 0 1 3 3zm3.279-9.279 3 3M12.7 19.3l3 3">
            </path>
        </svg>{{ $buttonText }}</button>
    <div id="hs-overlay"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden  border-2 border-red-700 -translate-x-full absolute top-0 right-0 transition-all duration-300 transform h-full z-1 bg-white border-l shadow-xl"
        tabindex="-1" style="width : 88.5%; heifht : 100% ">
        <div class="vue-portal-target stack">
            <div class="stack-container stack-is-current" style="left: 200px;">
                <div class="stack-overlay" style="left: -200px;"></div>
                <div class="stack-hit-area" style="left: -200px;"></div>
                <div class="stack-content">
                    <div class="h-full bg-gray-100 overflow-auto">
                        <div
                            class="bg-gray-300 px-6 py-2 border-b text-lg font-medium flex items-center justify-between">
                            Fieldtypes <button type="button" class="btn-close">×</button></div>
                        <!---->
                        <div class="py-4 px-6 border-b bg-white flex items-center"><input type="text"
                                autofocus="autofocus" placeholder="Search..."
                                class="input-text flex-1 bg-white text-sm w-full"></div>
                        <div class="p-4">
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Text &amp; Rich Content</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that store strings of text, rich
                                    content, or both.
                                </p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2">
                                            <button type="button" data-hs-overlay="#hs-overlay"
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M2 1.067c6.82-3.274 6.9 4.713 12 1.14 1.113-.787 2.527.44 1.08 2.333l-8.413 9.533">
                                                            </path>
                                                            <path
                                                                d="M2 3.26c5.473-2.707 6.6 4 10.667 1.147L2.333 14.073m-2 0V1.24A.833.833 0 0 1 2 1.24v12.833M3.667 2.68v10.147m1.666-10.14v8.58M7 3.347v6.36M8.667 4.42v3.733m-1 5.92H.333v1A.667.667 0 0 0 1 15.74h6a.667.667 0 0 0 .667-.667z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Bard</span>
                                            </button>
                                            <div class="">
                                                <div id="hs-overlay"
                                                    class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full absolute top-0 right-0 transition-all duration-300 transform h-full w-full z-1 bg-white border-l shadow-xl"
                                                    tabindex="-1" style="height : 100%">
                                                    <div class="vue-portal-target stack">
                                                        <div class="stack-container stack-is-current"
                                                            style="left: 200px;">
                                                            <div class="stack-overlay" style="left: -200px;"></div>
                                                            <div class="stack-hit-area" style="left: -200px;"></div>
                                                            <div class="stack-content">
                                                                <div class="h-full bg-gray-300 overflow-scroll">
                                                                    <!---->
                                                                    <header
                                                                        class="flex items-center sticky top-0 inset-x-0 bg-white shadow px-8 py-2 z-1 h-13">
                                                                        <h1 class="flex-1 flex items-center text-xl">
                                                                            Bard
                                                                            Field <small
                                                                                class="badge-pill bg-gray-100 rtl:mr-4 ltr:ml-4 border text-xs text-gray-700 font-medium leading-none flex items-center"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 16 16"
                                                                                    class="h-4 w-4 rtl:ml-2 ltr:mr-2 inline-block text-gray-700">
                                                                                    <g fill="none" stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width=".667">
                                                                                        <path
                                                                                            d="M2 1.067c6.82-3.274 6.9 4.713 12 1.14 1.113-.787 2.527.44 1.08 2.333l-8.413 9.533">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M2 3.26c5.473-2.707 6.6 4 10.667 1.147L2.333 14.073m-2 0V1.24A.833.833 0 0 1 2 1.24v12.833M3.667 2.68v10.147m1.666-10.14v8.58M7 3.347v6.36M8.667 4.42v3.733m-1 5.92H.333v1A.667.667 0 0 0 1 15.74h6a.667.667 0 0 0 .667-.667z">
                                                                                        </path>
                                                                                    </g>
                                                                                </svg> Bard </small></h1>
                                                                        <button type="button"
                                                                            class="btn-close mr-2 border">×</button>
                                                                        <button class="btn-primary">Apply</button>
                                                                    </header>
                                                                    <section class="py-4 px-3 md:px-8">
                                                                        <div class="tabs-container flex items-center">
                                                                            <div role="tablist"
                                                                                aria-label="Edit Content"
                                                                                class="publish-tabs tabs">
                                                                                <button role="tab" id="SettingsTab"
                                                                                    aria-controls="SettingsTabPanel"
                                                                                    tabindex="0" class="tab-button"
                                                                                    aria-selected="true">Settings</button>
                                                                                <button role="tab" id="ConditionsTab"
                                                                                    aria-controls="ConditionsTabPanel"
                                                                                    tabindex="-1"
                                                                                    class="tab-button">Conditions</button>
                                                                                <button role="tab" id="ValidationTab"
                                                                                    aria-controls="ValidationTabPanel"
                                                                                    tabindex="-2"
                                                                                    class="tab-button">Validation</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="field-setings">
                                                                            <div id="SettingsTabPanel"
                                                                                class="tab-panel active">
                                                                                <div class="publish-sections">
                                                                                    <div
                                                                                        class="publish-sections-section">
                                                                                        <div class="p-0 card">
                                                                                            <header
                                                                                                class="publish-section-header @container">
                                                                                                <div
                                                                                                    class="publish-section-header-inner">
                                                                                                    <label
                                                                                                        class="text-base font-semibold">Common</label>
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </header>
                                                                                            <div
                                                                                                class="publish-fields @container">
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__display field_display-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_display"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Display
                                                                                                                Label</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>The
                                                                                                                field's
                                                                                                                label
                                                                                                                shown
                                                                                                                in the
                                                                                                                Control
                                                                                                                Panel.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="flex items-center">
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                id="field_display"
                                                                                                                name="display"
                                                                                                                type="text"
                                                                                                                class="input-text"
                                                                                                                value="Bard Field"><button
                                                                                                                class="input-group-append flex items-center v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="w-5 h-5 text-gray-500">
                                                                                                                    <g fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round">
                                                                                                                        <path
                                                                                                                            d="M.91 12.59a1 1 0 0 1 0-1.18C2.11 9.8 5.9 5.5 12 5.5s9.89 4.3 11.09 5.91a1 1 0 0 1 0 1.18c-1.2 1.61-5 5.91-11.09 5.91S2.11 14.2.91 12.59Z">
                                                                                                                        </path>
                                                                                                                        <path
                                                                                                                            d="M7.76 13.5A4.38 4.38 0 0 1 7.5 12 4.49 4.49 0 0 1 12 7.5a4.38 4.38 0 0 1 1.5.26M15.18 8.82a4.5 4.5 0 1 1-6.36 6.36M17 7 6.75 17.25">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg></button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__handle slug-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_handle"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Handle</span><i
                                                                                                                class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>The
                                                                                                                field's
                                                                                                                template
                                                                                                                variable.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div>
                                                                                                        <div
                                                                                                            class="flex items-center">
                                                                                                            <div
                                                                                                                class="input-group">
                                                                                                                <!----><input
                                                                                                                    id="field_handle"
                                                                                                                    type="text"
                                                                                                                    dir="ltr"
                                                                                                                    class="input-text font-mono text-xs"
                                                                                                                    name="bard_field"
                                                                                                                    value="bard_field"><button
                                                                                                                    class="input-group-append items-center flex v-popper--has-tooltip"><svg
                                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                                        viewBox="0 0 24 24"
                                                                                                                        class="w-5 h-5">
                                                                                                                        <g fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round">
                                                                                                                            <path
                                                                                                                                d="M.713 10.34 3.5 14.49l3.205-3.838">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                d="M3.489 14.439a8.947 8.947 0 0 1 6.554-10.727 8.492 8.492 0 0 1 8.325 2.641m4.917 7.289L20.498 9.49l-3.205 3.838">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                d="M20.509 9.543a8.948 8.948 0 0 1-6.554 10.727 8.5 8.5 0 0 1-8.325-2.641">
                                                                                                                            </path>
                                                                                                                            <path
                                                                                                                                d="M10 11.991a2 2 0 1 0 4 0 2 2 0 1 0-4 0Z">
                                                                                                                            </path>
                                                                                                                        </g>
                                                                                                                    </svg></button>
                                                                                                            </div>
                                                                                                            <!---->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__instructions textarea-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_instructions"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Instructions</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Provide
                                                                                                                additional
                                                                                                                field
                                                                                                                instructions
                                                                                                                like
                                                                                                                this
                                                                                                                very
                                                                                                                text.
                                                                                                                Markdown
                                                                                                                formatting
                                                                                                                is
                                                                                                                supported.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        name="instructions">
                                                                                                        <textarea
                                                                                                            id="field_instructions"
                                                                                                            class="input-text"
                                                                                                            style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 80px;"></textarea>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div class="form-group publish-field publish-field__instructions_position select-fieldtype config-field"
                                                                                                    style="display: none;">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_instructions_position"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Instructions
                                                                                                                Position</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Show
                                                                                                                instructions
                                                                                                                above or
                                                                                                                below
                                                                                                                the
                                                                                                                field.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div data-v-288ded3d=""
                                                                                                        class="flex">
                                                                                                        <div data-v-288ded3d=""
                                                                                                            dir="auto"
                                                                                                            class="v-select flex-1 vs--single vs--searchable"
                                                                                                            name="instructions_position">
                                                                                                            <div id="vs39__combobox"
                                                                                                                role="combobox"
                                                                                                                aria-expanded="false"
                                                                                                                aria-owns="vs39__listbox"
                                                                                                                aria-label="Search for option"
                                                                                                                class="vs__dropdown-toggle">
                                                                                                                <div
                                                                                                                    class="vs__selected-options">
                                                                                                                    <span
                                                                                                                        class="vs__selected">
                                                                                                                        Above
                                                                                                                        <!---->
                                                                                                                    </span>
                                                                                                                    <input
                                                                                                                        id="field_instructions_position"
                                                                                                                        aria-autocomplete="list"
                                                                                                                        aria-labelledby="vs39__combobox"
                                                                                                                        aria-controls="vs39__listbox"
                                                                                                                        type="search"
                                                                                                                        autocomplete="off"
                                                                                                                        class="vs__search">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="vs__actions">
                                                                                                                    <button
                                                                                                                        type="button"
                                                                                                                        title="Clear Selected"
                                                                                                                        aria-label="Clear Selected"
                                                                                                                        class="vs__clear"
                                                                                                                        style="display: none;"><span>×</span></button>
                                                                                                                    <span
                                                                                                                        class="toggle vs__open-indicator"
                                                                                                                        role="presentation"><svg
                                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                                            height="16"
                                                                                                                            width="16"
                                                                                                                            viewBox="0 0 20 20">
                                                                                                                            <path
                                                                                                                                fill="currentColor"
                                                                                                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                            </path>
                                                                                                                        </svg></span>
                                                                                                                    <div class="vs__spinner"
                                                                                                                        style="display: none;">
                                                                                                                        Loading...
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <ul id="vs39__listbox"
                                                                                                                role="listbox"
                                                                                                                style="display: none; visibility: hidden;">
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__listable select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_listable"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Listable</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Control
                                                                                                                the
                                                                                                                listing
                                                                                                                column
                                                                                                                visibility.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="hidden"
                                                                                                                selected="selected">
                                                                                                                Hidden by default
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="show">
                                                                                                                Show by default
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="listed">
                                                                                                                Not listed
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__visibility select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_visibility"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Visibility</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Control
                                                                                                                field
                                                                                                                visibility
                                                                                                                on
                                                                                                                publish
                                                                                                                forms.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="visible"
                                                                                                                selected="selected">
                                                                                                                Visible
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="read">
                                                                                                                Read Only
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="computed">
                                                                                                                Computed
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="Hidden">
                                                                                                                Hidden
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__replicator_preview toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_replicator_preview"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Preview</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Control
                                                                                                                preview
                                                                                                                visibility
                                                                                                                in
                                                                                                                Replicator/Bard
                                                                                                                sets.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_replicator_preview">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__duplicate toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_duplicate"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Duplicate</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Whether
                                                                                                                this
                                                                                                                field
                                                                                                                should
                                                                                                                be
                                                                                                                included
                                                                                                                when
                                                                                                                duplicating
                                                                                                                the
                                                                                                                item.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_duplicate">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="publish-sections-section">
                                                                                        <div class="p-0 card">
                                                                                            <header
                                                                                                class="publish-section-header @container">
                                                                                                <div
                                                                                                    class="publish-section-header-inner">
                                                                                                    <label
                                                                                                        class="text-base font-semibold">Editor</label>
                                                                                                    <div
                                                                                                        class="help-block">
                                                                                                        <p>
                                                                                                        <p>Configure the
                                                                                                            editor's
                                                                                                            appearance
                                                                                                            and
                                                                                                            general
                                                                                                            behavior.
                                                                                                        </p>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </header>
                                                                                            <div
                                                                                                class="publish-fields @container">
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__buttons bard_buttons_setting-fieldtype config-field full-width-setting">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_buttons"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Buttons</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Choose
                                                                                                                which
                                                                                                                buttons
                                                                                                                to
                                                                                                                show in
                                                                                                                the
                                                                                                                toolbar.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="relative">
                                                                                                        <div class="bard-fixed-toolbar dark bard-toolbar-setting"
                                                                                                            tabindex="0">
                                                                                                            <button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M12.93 12.75H9.61V12c0-.53.29-1 .74-1.22l1.84-.86c.44-.21.73-.67.73-1.18 0-.71-.54-1.29-1.21-1.29h-.86c-.54 0-1 .37-1.17.88M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M9.54 11.87c.18.52.67.88 1.25.88h.88c.73 0 1.33-.59 1.33-1.33v-.22c0-.73-.59-1.33-1.33-1.33h-.44.33c.67 0 1.22-.54 1.22-1.22s-.54-1.22-1.22-1.22h-.66c-.56 0-1.03.37-1.17.88M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M3.5.25a.75.75 0 0 0-.75.75v12a.75.75 0 0 0 .75.75h3.75a4 4 0 0 0 1.945-7.496A3.5 3.5 0 0 0 6.75.25H3.5Zm3.25 5.5a2 2 0 1 0 0-4h-2.5v4h2.5Zm-2.5 1.5v5h3a2.5 2.5 0 0 0 0-5h-3Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M12.45.345H5.637a.75.75 0 0 0 0 1.5H8.18l-3.965 10.31H1.55a.75.75 0 1 0 0 1.5h6.813a.75.75 0 0 0 0-1.5H5.82l3.965-10.31h2.664a.75.75 0 0 0 0-1.5Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <g
                                                                                                                        fill="currentColor">
                                                                                                                        <path
                                                                                                                            d="M8.5 5H23a1 1 0 0 0 0-2H8.5a1 1 0 0 0 0 2ZM23 11H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Zm0 8H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Z">
                                                                                                                        </path>
                                                                                                                        <rect
                                                                                                                            width="3"
                                                                                                                            height="3"
                                                                                                                            x="1"
                                                                                                                            y="2.5"
                                                                                                                            rx=".5">
                                                                                                                        </rect>
                                                                                                                        <path
                                                                                                                            d="M3.5 1.5h-2A1.5 1.5 0 0 0 0 3v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 5V3a1.5 1.5 0 0 0-1.5-1.5ZM4 5a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 5V3a.5.5 0 0 1 .5-.5h2A.5.5 0 0 1 4 3Z">
                                                                                                                        </path>
                                                                                                                        <rect
                                                                                                                            width="3"
                                                                                                                            height="3"
                                                                                                                            x="1"
                                                                                                                            y="10.5"
                                                                                                                            rx=".5">
                                                                                                                        </rect>
                                                                                                                        <path
                                                                                                                            d="M3.5 9.5h-2A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 13v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 13a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 13v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z">
                                                                                                                        </path>
                                                                                                                        <rect
                                                                                                                            width="3"
                                                                                                                            height="3"
                                                                                                                            x="1"
                                                                                                                            y="18.5"
                                                                                                                            rx=".5">
                                                                                                                        </rect>
                                                                                                                        <path
                                                                                                                            d="M3.5 17.5h-2A1.5 1.5 0 0 0 0 19v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 21v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 21a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 21v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        d="M7.75 4.5h15a1 1 0 0 0 0-2h-15a1 1 0 0 0 0 2Zm15 6.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2Zm0 8.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2ZM2.21 17.25a2 2 0 0 0-1.93 1.48.75.75 0 0 0 1.45.39.5.5 0 0 1 .48-.37.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.5.5 0 0 1-1 .13.75.75 0 1 0-1.44.41 2 2 0 0 0 3.92-.54 1.94 1.94 0 0 0-.34-1.11.28.28 0 0 1 0-.28 1.94 1.94 0 0 0 .34-1.11 2 2 0 0 0-1.98-2Zm2.04-6.5a2 2 0 0 0-4 0 .76.76 0 0 0 .75.75.76.76 0 0 0 .75-.75.5.5 0 0 1 1 0 1 1 0 0 1-.23.64L.41 14a.76.76 0 0 0-.09.79.76.76 0 0 0 .68.43h2.5a.75.75 0 0 0 0-1.5h-.42a.25.25 0 0 1-.22-.14.24.24 0 0 1 0-.27l.81-1a2.59 2.59 0 0 0 .58-1.56ZM4 5.25h-.25A.25.25 0 0 1 3.5 5V1.62A1.38 1.38 0 0 0 2.12.25H1.5a.75.75 0 0 0 0 1.5h.25A.25.25 0 0 1 2 2v3a.25.25 0 0 1-.25.25H1.5a.75.75 0 0 0 0 1.5H4a.75.75 0 0 0 0-1.5Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        d="M20.48 21.66h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2ZM22 6.43 16.38.78a1.49 1.49 0 0 0-2.12 0L6.5 8.54a1 1 0 0 0 0 1.46l6.36 6.37a1 1 0 0 0 1.42 0L22 8.56a1.51 1.51 0 0 0 0-2.13ZM9.18 19.66a1.82 1.82 0 0 0 1.22-.53l1-1.13a.49.49 0 0 0 0-.68l-5.78-5.73a.5.5 0 0 0-.71 0l-2.65 2.7a2.59 2.59 0 0 0 0 3.6l1.08 1.22a1.75 1.75 0 0 0 1.21.55Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        d="M9.93 3.93a9.71 9.71 0 0 0-9.43 10v1.24a4.94 4.94 0 1 0 4.94-4.94 4.5 4.5 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57 1.25 1.25 0 1 0 0-2.5Zm12.32 2.5a1.25 1.25 0 1 0 0-2.5 9.71 9.71 0 0 0-9.43 10v1.24a4.95 4.95 0 1 0 4.94-4.94 4.56 4.56 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M6.05 2.664a2.377 2.377 0 0 0 .257 3.057l.456.456-.586.586-.456-.456a2.377 2.377 0 0 0-3.057-.257l-.282.2A7.476 7.476 0 0 0 .645 7.974a2.768 2.768 0 0 0 .288 3.575l1.517 1.517a2.768 2.768 0 0 0 3.575.288 7.475 7.475 0 0 0 1.726-1.737l.22-.31a2.336 2.336 0 0 0-.254-3.005l-.48-.48.586-.586.48.48a2.337 2.337 0 0 0 3.006.253l.309-.22a7.479 7.479 0 0 0 1.737-1.725 2.768 2.768 0 0 0-.288-3.575L11.55.933A2.768 2.768 0 0 0 7.975.645a7.476 7.476 0 0 0-1.726 1.737l-.2.282Zm2.834 3.513.48.48a.837.837 0 0 0 1.076.09l.31-.22a5.975 5.975 0 0 0 1.388-1.379 1.268 1.268 0 0 0-.132-1.637l-1.517-1.517a1.268 1.268 0 0 0-1.637-.132c-.533.384-1 .853-1.38 1.389l-.2.281a.877.877 0 0 0 .095 1.128l.456.456.508-.508a.75.75 0 1 1 1.061 1.06l-.508.509ZM5.116 7.823l-.5.5a.75.75 0 1 0 1.062 1.06l.499-.499.48.48a.837.837 0 0 1 .09 1.076l-.22.31a5.975 5.975 0 0 1-1.379 1.388 1.268 1.268 0 0 1-1.637-.132L1.994 10.49a1.268 1.268 0 0 1-.132-1.637c.384-.533.853-1 1.389-1.38l.281-.2a.877.877 0 0 1 1.128.096l.456.455Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M3.824.583C4.837.47 5.904.37 7 .37c1.097 0 2.163.1 3.176.213a3.696 3.696 0 0 1 3.252 3.262c.108 1.008.202 2.067.202 3.155 0 1.088-.094 2.147-.202 3.155a3.696 3.696 0 0 1-3.252 3.262c-1.013.113-2.08.213-3.176.213s-2.163-.1-3.176-.213a3.696 3.696 0 0 1-3.252-3.262C.464 9.147.37 8.088.37 7c0-1.088.094-2.147.202-3.155A3.696 3.696 0 0 1 3.824.583Zm6.724 3.669a1.446 1.446 0 1 1-2.893 0 1.446 1.446 0 0 1 2.893 0Zm-6.196 7.711c-1.159-.146-2.092-1.206-2.216-2.523a39.527 39.527 0 0 1-.147-2.015.464.464 0 0 1 .412-.489 5.59 5.59 0 0 1 .564-.027c1.405-.036 2.775.496 3.866 1.5.883.814 1.537 1.895 1.892 3.108a.465.465 0 0 1-.417.59 15.7 15.7 0 0 1-1.308.059c-.9 0-1.785-.094-2.646-.203Zm5.737-.103c-.136.046-.274-.05-.301-.19-.14-.726-.43-1.622-.957-2.405-.1-.147-.033-.353.14-.392a5.62 5.62 0 0 1 2.738.07c.113.031.184.14.174.257l-.022.24c-.108 1.144-.826 2.093-1.772 2.42Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="active v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M17 17v5h2a3 3 0 0 0 3-3v-2h-5Zm-2 0H9v5h6v-5Zm2-2h5V9h-5v6Zm-2 0V9H9v6h6Zm2-8h5V5a3 3 0 0 0-3-3h-2v5Zm-2 0V2H9v5h6Zm9 9.177V19a5 5 0 0 1-5 5H5a5 5 0 0 1-5-5V5a5 5 0 0 1 5-5h14a5 5 0 0 1 5 5v2.823a.843.843 0 0 1 0 .354v7.646a.843.843 0 0 1 0 .354ZM7 2H5a3 3 0 0 0-3 3v2h5V2ZM2 9v6h5V9H2Zm0 8v2a3 3 0 0 0 3 3h2v-5H2Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M11.39 7.65v5.1M9.7 8.72h.42c.7 0 1.27-.57 1.27-1.27m1.7 5.3h-3.4m-8.69 0V1.25m5.75 0v11.5M1 6.52h5.75">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M12.36 11.42H9.15c-.18 0-.32-.14-.32-.32 0-.08.03-.15.08-.21l2.92-3.34c.06-.07.14-.1.23-.1.17 0 .3.14.3.3v3.67zm0 0h.88m-.88 0v1.33M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75m6.07.92H9.95l-.44 2.65.32-.16c.37-.18.77-.28 1.19-.28h.7c.73 0 1.33.59 1.33 1.33v.44c0 .73-.59 1.33-1.33 1.33h-.88c-.58 0-1.07-.37-1.25-.88">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <defs>
                                                                                                                        <clipPath
                                                                                                                            id="a">
                                                                                                                            <path
                                                                                                                                fill="none"
                                                                                                                                d="M0 0h14v14H0z">
                                                                                                                            </path>
                                                                                                                        </clipPath>
                                                                                                                    </defs>
                                                                                                                    <g
                                                                                                                        clip-path="url(#a)">
                                                                                                                        <path
                                                                                                                            fill="none"
                                                                                                                            stroke="currentColor"
                                                                                                                            stroke-linecap="round"
                                                                                                                            stroke-linejoin="round"
                                                                                                                            stroke-width="1.5"
                                                                                                                            d="M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75m2.75 4.9v-.22c0-.73.59-1.33 1.33-1.33h.88c.73 0 1.33.59 1.33 1.33v.22c0 .73-.59 1.33-1.33 1.33h-.88c-.73 0-1.33-.59-1.33-1.33zm0 0V8.77c0-.73.59-1.33 1.33-1.33h.88c.58 0 1.07.37 1.25.88">
                                                                                                                        </path>
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M4.75.91a.75.75 0 0 0-1.5 0v6.27a3.75 3.75 0 0 0 7.5 0V.91a.75.75 0 0 0-1.5 0v6.27a2.25 2.25 0 1 1-4.5 0V.91ZM.962 12.33a.75.75 0 1 0-.08 1.498c4.742.253 7.53.186 12.225 0a.75.75 0 0 0-.06-1.498c-4.673.185-7.409.25-12.085 0Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        d="M23.75 13a1.25 1.25 0 0 0-1.25-1.3h-8.94a.49.49 0 0 1-.28-.09c-.72-.51-1.48-1-2.22-1.43-2.79-1.72-4.49-2.9-4.49-4.86 0-2.24 2.21-2.57 3.52-2.57a4.53 4.53 0 0 1 3.08.76 2.69 2.69 0 0 1 .45 2v.29a1.25 1.25 0 0 0 2.5 0v-.27A4.89 4.89 0 0 0 15 1.76C14 .74 12.36.25 10.09.25c-3.66 0-6 2-6 5.07 0 2.77 1.89 4.51 4 5.92a.26.26 0 0 1 .1.28.25.25 0 0 1-.24.18H1.5a1.25 1.25 0 0 0 0 2.5h11a.27.27 0 0 1 .16.06 4.36 4.36 0 0 1 1.93 3.47c0 3.26-3.43 3.52-4.48 3.52-1.81 0-3.14-.41-3.83-1.17a3.4 3.4 0 0 1-.65-2.71 1.25 1.25 0 1 0-2.49-.24 5.75 5.75 0 0 0 1.26 4.62c1.2 1.33 3.12 2 5.69 2 4.17 0 7-2.42 7-6a6 6 0 0 0-.85-3.15.23.23 0 0 1 0-.25.23.23 0 0 1 .21-.13h6.05A1.25 1.25 0 0 0 23.75 13Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M4.386 2.152a.53.53 0 0 1 1.03 0l1.257 5.03a.75.75 0 0 0 1.455-.364l-1.257-5.03a2.03 2.03 0 0 0-3.94 0L1.177 8.802a.737.737 0 0 0-.008.031l-.996 3.985a.75.75 0 0 0 1.455.364l.858-3.432h3.415a.75.75 0 0 0 0-1.5H2.86l1.525-6.098Zm7.506 9.598.496 1.487a.75.75 0 0 0 1.423-.474l-.66-1.98a.835.835 0 0 0-.013-.04l-1.169-3.506a1.444 1.444 0 0 0-2.74 0L8.06 10.75a.792.792 0 0 0-.009.026l-.662 1.987a.75.75 0 0 0 1.423.474l.496-1.487h2.585Zm-.5-1.5L10.6 7.872l-.792 2.378h1.585Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M11.63.083c-.71 0-1.31.454-1.533 1.084a.625.625 0 1 0 1.179.416.375.375 0 0 1 .353-.25h.693a.35.35 0 0 1 .14.67l-1.484.649a1.625 1.625 0 0 0-.974 1.488v.569c0 .345.28.625.625.625h2.667a.625.625 0 1 0 0-1.25H11.26a.375.375 0 0 1 .22-.287l1.484-.65a1.6 1.6 0 0 0-.641-3.064h-.693ZM7.954 5.621a.75.75 0 0 0-1.06.03L4.329 8.368 1.763 5.651a.75.75 0 0 0-1.09 1.03l2.624 2.78-3.013 3.19a.75.75 0 1 0 1.09 1.03l2.955-3.128 2.955 3.128a.75.75 0 1 0 1.09-1.03l-3.013-3.19 2.624-2.78a.75.75 0 0 0-.03-1.06Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M7.955.519a.75.75 0 0 0-1.06.03L4.329 3.266 1.763.549a.75.75 0 1 0-1.09 1.03l2.624 2.78-3.013 3.19a.75.75 0 1 0 1.09 1.03L4.33 5.45l2.954 3.13a.75.75 0 0 0 1.09-1.03L5.361 4.358l2.624-2.78a.75.75 0 0 0-.03-1.06Zm3.674 7.917c-.708 0-1.31.453-1.532 1.084a.625.625 0 1 0 1.179.416.375.375 0 0 1 .353-.25h.693a.35.35 0 0 1 .14.67l-1.484.648a1.625 1.625 0 0 0-.974 1.49v.567c0 .346.28.625.625.625h2.667a.625.625 0 1 0 0-1.25H11.26a.375.375 0 0 1 .22-.286l1.484-.65a1.6 1.6 0 0 0-.641-3.064h-.693Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M5.04 4.338a1 1 0 0 0-1.1-1.67C2.396 3.682 1.514 4.46.522 5.897a1.94 1.94 0 0 0 0 2.204c.992 1.438 1.874 2.215 3.416 3.23a1 1 0 1 0 1.1-1.67C3.667 8.758 2.993 8.153 2.192 7c.801-1.153 1.475-1.758 2.847-2.662Zm3.92 0a1 1 0 1 1 1.1-1.67c1.543 1.015 2.425 1.792 3.417 3.23a1.94 1.94 0 0 1 0 2.204c-.992 1.438-1.874 2.215-3.416 3.23a1 1 0 0 1-1.1-1.67c1.372-.904 2.046-1.509 2.847-2.662-.801-1.153-1.475-1.758-2.847-2.662Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M12.268 3.633H1.732a2.3 2.3 0 0 0-.026.178C1.593 4.868 1.5 5.928 1.5 7s.093 2.132.206 3.189a2.382 2.382 0 0 0 2.09 2.094c1.063.119 2.127.217 3.204.217 1.077 0 2.141-.098 3.204-.217a2.382 2.382 0 0 0 2.09-2.094c.113-1.057.206-2.117.206-3.189s-.093-2.132-.206-3.189a2.29 2.29 0 0 0-.026-.178ZM3.63.226C4.706.106 5.837 0 7 0c1.163 0 2.294.106 3.37.226a3.882 3.882 0 0 1 3.416 3.426C13.9 4.722 14 5.846 14 7s-.1 2.278-.214 3.348a3.882 3.882 0 0 1-3.416 3.426C9.294 13.894 8.163 14 7 14c-1.163 0-2.294-.106-3.37-.226a3.882 3.882 0 0 1-3.416-3.426C.1 9.278 0 8.154 0 7s.1-2.278.214-3.348A3.882 3.882 0 0 1 3.63.226Zm1.184 5.848a.625.625 0 0 1 0 .884l-.99.991.99.991a.625.625 0 1 1-.884.884L2.497 8.391a.625.625 0 0 1 0-.884L3.93 6.074a.625.625 0 0 1 .884 0Zm5.255 0a.625.625 0 0 0-.883.884l.99.991-.99.991a.625.625 0 1 0 .883.884l1.434-1.433a.625.625 0 0 0 0-.884l-1.434-1.433ZM7.915 4.968a.625.625 0 0 1 .396.79l-1.434 4.3a.625.625 0 1 1-1.185-.396l1.433-4.3a.625.625 0 0 1 .79-.394Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        d="M1.5 13.5h21a1.5 1.5 0 0 0 0-3h-21a1.5 1.5 0 0 0 0 3Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M.77.25a.75.75 0 1 0 0 1.5h12.46a.75.75 0 0 0 0-1.5H.77Zm0 4a.75.75 0 0 0 0 1.5h8.926a.75.75 0 1 0 0-1.5H.77ZM.02 13a.75.75 0 0 1 .75-.75h12.46a.75.75 0 0 1 0 1.5H.77A.75.75 0 0 1 .02 13Zm.75-4.75a.75.75 0 0 0 0 1.5h8.926a.75.75 0 1 0 0-1.5H.77Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M1 .25a.75.75 0 1 0 0 1.5h12a.75.75 0 0 0 0-1.5H1Zm1.385 4a.75.75 0 0 0 0 1.5h9.23a.75.75 0 0 0 0-1.5h-9.23ZM.25 13a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5H1A.75.75 0 0 1 .25 13Zm2.135-4.75a.75.75 0 0 0 0 1.5h9.23a.75.75 0 0 0 0-1.5h-9.23Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M13.232.25a.75.75 0 0 1 0 1.5H.768a.75.75 0 0 1 0-1.5h12.464Zm0 4a.75.75 0 0 1 0 1.5H4.303a.75.75 0 1 1 0-1.5h8.929Zm.75 8.75a.75.75 0 0 0-.75-.75H.768a.75.75 0 0 0 0 1.5h12.464a.75.75 0 0 0 .75-.75Zm-.75-4.75a.75.75 0 0 1 0 1.5H4.303a.75.75 0 1 1 0-1.5h8.929Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button><button
                                                                                                                class="v-popper--has-tooltip"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    fill="none"
                                                                                                                    viewBox="0 0 14 14">
                                                                                                                    <path
                                                                                                                        fill="currentColor"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M.77.25a.75.75 0 1 0 0 1.5h12.46a.75.75 0 0 0 0-1.5H.77Zm0 4a.75.75 0 0 0 0 1.5h12.46a.75.75 0 0 0 0-1.5H.77ZM.02 13a.75.75 0 0 1 .75-.75h12.46a.75.75 0 0 1 0 1.5H.77A.75.75 0 0 1 .02 13Zm.75-4.75a.75.75 0 0 0 0 1.5h12.46a.75.75 0 0 0 0-1.5H.77Z"
                                                                                                                        clip-rule="evenodd">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <!---->
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__smart_typography toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_smart_typography"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Smart
                                                                                                                Typography</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Convert
                                                                                                                common
                                                                                                                text
                                                                                                                patterns
                                                                                                                with the
                                                                                                                proper
                                                                                                                typographic
                                                                                                                characters.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_smart_typography">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__save_html toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_save_html"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Save
                                                                                                                as
                                                                                                                HTML</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Save HTML
                                                                                                                instead
                                                                                                                of
                                                                                                                structured
                                                                                                                data.
                                                                                                                This
                                                                                                                simplifies
                                                                                                                but
                                                                                                                limits
                                                                                                                control
                                                                                                                of
                                                                                                                your
                                                                                                                template
                                                                                                                markup.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_save_html">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__inline select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_inline"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Inline</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Disable
                                                                                                                block
                                                                                                                elements
                                                                                                                like
                                                                                                                headings,
                                                                                                                images,
                                                                                                                and
                                                                                                                sets.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="disable"
                                                                                                                selected="selected">
                                                                                                                Disabled
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="enable1">
                                                                                                                Enabled without line breaks
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="enable2">
                                                                                                                Enable with line breaks
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__toolbar_mode select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_toolbar_mode"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Toolbar
                                                                                                                Mode</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p><strong>Fixed</strong>
                                                                                                                mode
                                                                                                                will
                                                                                                                keep the
                                                                                                                toolbar
                                                                                                                visible
                                                                                                                at
                                                                                                                all
                                                                                                                times,
                                                                                                                while
                                                                                                                <strong>floating</strong>
                                                                                                                only
                                                                                                                appears
                                                                                                                while
                                                                                                                selecting
                                                                                                                text.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="fixed"
                                                                                                                selected="selected">
                                                                                                                Fixed
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="float">
                                                                                                                Floating
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__reading_time toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_reading_time"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Show
                                                                                                                Reading
                                                                                                                Time</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Show
                                                                                                                estimated
                                                                                                                reading
                                                                                                                time
                                                                                                                at the
                                                                                                                bottom
                                                                                                                of
                                                                                                                the
                                                                                                                field.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_reading_time">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__word_count toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_word_count"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Show
                                                                                                                Word
                                                                                                                Count</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Show the
                                                                                                                word
                                                                                                                count at
                                                                                                                the
                                                                                                                bottom
                                                                                                                of
                                                                                                                the
                                                                                                                field.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_word_count">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__fullscreen toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_fullscreen"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Allow
                                                                                                                Fullscreen
                                                                                                                Mode</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enable
                                                                                                                toggle
                                                                                                                for
                                                                                                                fullscreen
                                                                                                                mode</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_fullscreen">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__allow_source toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_allow_source"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Allow
                                                                                                                Source
                                                                                                                Mode</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enable to
                                                                                                                view the
                                                                                                                HTML
                                                                                                                source
                                                                                                                code
                                                                                                                while
                                                                                                                writing.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_allow_source">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__enable_input_rules toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_enable_input_rules"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enable
                                                                                                                Input
                                                                                                                Rules</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enables
                                                                                                                Markdown-style
                                                                                                                shortcuts
                                                                                                                when
                                                                                                                typing
                                                                                                                content.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_enable_input_rules">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__enable_paste_rules toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_enable_paste_rules"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enable
                                                                                                                Paste
                                                                                                                Rules</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enables
                                                                                                                Markdown-style
                                                                                                                shortcuts
                                                                                                                when
                                                                                                                pasting
                                                                                                                content.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_enable_paste_rules">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__remove_empty_nodes select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_remove_empty_nodes"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Remove
                                                                                                                Empty
                                                                                                                Nodes</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Choose
                                                                                                                how to
                                                                                                                deal
                                                                                                                with
                                                                                                                empty
                                                                                                                nodes.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="remove1"
                                                                                                                selected="selected">
                                                                                                                Don't remove empty nodes
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="remove2">
                                                                                                                Remove all empty nods
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="remove3">
                                                                                                                Remove empty nodes at the start and end
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__placeholder text-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_placeholder"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Placeholder</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Set
                                                                                                                placeholder
                                                                                                                text.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="flex items-center">
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <!----><input
                                                                                                                id="field_placeholder"
                                                                                                                name="placeholder"
                                                                                                                type="text"
                                                                                                                class="input-text">
                                                                                                            <!---->
                                                                                                        </div>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__character_limit integer-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_character_limit"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Character
                                                                                                                Limit</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Set the
                                                                                                                maximum
                                                                                                                number
                                                                                                                of
                                                                                                                enterable
                                                                                                                characters.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="flex items-center">
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <!----><input
                                                                                                                id="field_character_limit"
                                                                                                                name="character_limit"
                                                                                                                type="number"
                                                                                                                class="input-text">
                                                                                                            <!---->
                                                                                                        </div>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__antlers toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_antlers"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Antlers</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enable
                                                                                                                Antlers
                                                                                                                parsing
                                                                                                                in
                                                                                                                this
                                                                                                                field's
                                                                                                                content.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_antlers">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="publish-sections-section">
                                                                                        <div class="p-0 card">
                                                                                            <header
                                                                                                class="publish-section-header @container">
                                                                                                <div
                                                                                                    class="publish-section-header-inner">
                                                                                                    <label
                                                                                                        class="text-base font-semibold">Links</label>
                                                                                                    <div
                                                                                                        class="help-block">
                                                                                                        <p>
                                                                                                        <p>Configure how
                                                                                                            links are
                                                                                                            handled in
                                                                                                            this
                                                                                                            instance of
                                                                                                            Bard.</p>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </header>
                                                                                            <div
                                                                                                class="publish-fields @container">
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__link_noopener toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_link_noopener"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Link
                                                                                                                Noopener</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Set
                                                                                                                <code>rel="noopener"</code>
                                                                                                                on all
                                                                                                                links.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_link_noopener">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__link_noreferrer toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_link_noreferrer"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Link
                                                                                                                Noreferrer</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Set
                                                                                                                <code>rel="noreferrer"</code>
                                                                                                                on all
                                                                                                                links.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_link_noreferrer">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__target_blank toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_target_blank"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Target
                                                                                                                Blank</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Set
                                                                                                                <code>target="_blank"</code>
                                                                                                                on all
                                                                                                                links.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_target_blank">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__link_collections relationship-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_link_collections"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Link
                                                                                                                Collections</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Entries
                                                                                                                from
                                                                                                                these
                                                                                                                collections
                                                                                                                will be
                                                                                                                available
                                                                                                                in
                                                                                                                the link
                                                                                                                selector.
                                                                                                                Leaving
                                                                                                                this
                                                                                                                empty
                                                                                                                will
                                                                                                                make all
                                                                                                                entries
                                                                                                                available.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="relationship-input relationship-input-empty">
                                                                                                        <div
                                                                                                            data-v-c80a132c="">
                                                                                                            <div data-v-c80a132c=""
                                                                                                                dir="auto"
                                                                                                                class="v-select vs--multiple vs--searchable">
                                                                                                                <div id="vs47__combobox"
                                                                                                                    role="combobox"
                                                                                                                    aria-expanded="false"
                                                                                                                    aria-owns="vs47__listbox"
                                                                                                                    aria-label="Search for option"
                                                                                                                    class="vs__dropdown-toggle">
                                                                                                                    <div
                                                                                                                        class="vs__selected-options">
                                                                                                                        <input
                                                                                                                            data-v-c80a132c=""
                                                                                                                            placeholder="Choose..."
                                                                                                                            type="search"
                                                                                                                            aria-autocomplete="list"
                                                                                                                            aria-labelledby="vs47__combobox"
                                                                                                                            aria-controls="vs47__listbox"
                                                                                                                            autocomplete="off"
                                                                                                                            class="vs__search">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="vs__actions">
                                                                                                                        <button
                                                                                                                            type="button"
                                                                                                                            title="Clear Selected"
                                                                                                                            aria-label="Clear Selected"
                                                                                                                            class="vs__clear"
                                                                                                                            style="display: none;"><span>×</span></button>
                                                                                                                        <span
                                                                                                                            class="toggle vs__open-indicator"
                                                                                                                            role="presentation"><svg
                                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                                height="16"
                                                                                                                                width="16"
                                                                                                                                viewBox="0 0 20 20">
                                                                                                                                <path
                                                                                                                                    fill="currentColor"
                                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                                </path>
                                                                                                                            </svg></span>
                                                                                                                        <div class="vs__spinner"
                                                                                                                            style="display: none;">
                                                                                                                            Loading...
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <ul id="vs47__listbox"
                                                                                                                    role="listbox"
                                                                                                                    style="display: none; visibility: hidden;">
                                                                                                                </ul>
                                                                                                                <div data-v-c80a132c=""
                                                                                                                    class="vs__selected-options-outside flex flex-wrap"
                                                                                                                    tabindex="0">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!---->
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__container relationship-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_container"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Container</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Choose
                                                                                                                which
                                                                                                                asset
                                                                                                                container
                                                                                                                to
                                                                                                                use for
                                                                                                                this
                                                                                                                field.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="relationship-input relationship-input-empty">
                                                                                                        <div
                                                                                                        class="select-input-container w-full">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="assets"
                                                                                                                selected="selected">
                                                                                                                Assets
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="publish-sections-section">
                                                                                        <div class="p-0 card">
                                                                                            <header
                                                                                                class="publish-section-header @container">
                                                                                                <div
                                                                                                    class="publish-section-header-inner">
                                                                                                    <label
                                                                                                        class="text-base font-semibold">Sets</label>
                                                                                                    <div
                                                                                                        class="help-block">
                                                                                                        <p>
                                                                                                        <p>Configure
                                                                                                            blocks
                                                                                                            of fields
                                                                                                            that
                                                                                                            can be
                                                                                                            inserted
                                                                                                            anywhere in
                                                                                                            your
                                                                                                            Bard
                                                                                                            content.
                                                                                                        </p>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </header>
                                                                                            <div
                                                                                                class="publish-fields @container">
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__sets sets-fieldtype config-field full-width-setting">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <!---->
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div>
                                                                                                        <div>
                                                                                                            <!----><button
                                                                                                                class="btn">Add
                                                                                                                Set
                                                                                                                Group</button>
                                                                                                            <!---->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="publish-sections-section">
                                                                                        <div class="p-0 card">
                                                                                            <header
                                                                                                class="publish-section-header @container">
                                                                                                <div
                                                                                                    class="publish-section-header-inner">
                                                                                                    <label
                                                                                                        class="text-base font-semibold">Set
                                                                                                        Behavior</label>
                                                                                                    <!---->
                                                                                                </div>
                                                                                            </header>
                                                                                            <div
                                                                                                class="publish-fields @container">
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__always_show_set_button toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_always_show_set_button"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Always
                                                                                                                Show Set
                                                                                                                Button</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Enable to
                                                                                                                always
                                                                                                                show
                                                                                                                the "Add
                                                                                                                Set"
                                                                                                                button.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_always_show_set_button">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__collapse select-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_collapse"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Collapse</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>The set
                                                                                                                collapsing
                                                                                                                behavior.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="select-input-container w-1/2">
                                                                                                        <select
                                                                                                            class="select-input bg-white">
                                                                                                            <option
                                                                                                                value="expand"
                                                                                                                selected="selected">
                                                                                                                All sets expanded by default
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="collapse">
                                                                                                                All sets collapsed by default
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="allowed">
                                                                                                                Only allow one set to be expanded at a time
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="select-input-toggle border-l border-gray-400">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group publish-field publish-field__previews toggle-fieldtype config-field">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_previews"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Field
                                                                                                                Previews</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
                                                                                                                        stroke="currentColor"
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        stroke-width="1.5"
                                                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                                    </path>
                                                                                                                </svg></button>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="help-block -mt-2">
                                                                                                            <p>Shown
                                                                                                                when
                                                                                                                sets are
                                                                                                                collapsed.
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="true"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container on"
                                                                                                            id="field_previews">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
                                                                                                        <!---->
                                                                                                    </div>
                                                                                                    <!---->
                                                                                                    <!---->
                                                                                                </div>
                                                                                                <div class="form-group publish-field publish-field__hide_display toggle-fieldtype config-field"
                                                                                                    style="display: none;">
                                                                                                    <div
                                                                                                        class="field-inner">
                                                                                                        <label
                                                                                                            for="field_hide_display"
                                                                                                            class="publish-field-label"><span
                                                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Hide
                                                                                                                Display</span>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                            <!----><button
                                                                                                                class="outline-none"
                                                                                                                style="display: none;"><svg
                                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                                    <path
                                                                                                                        fill="none"
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
                                                                                                    <div
                                                                                                        class="toggle-fieldtype-wrapper">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            aria-pressed="false"
                                                                                                            aria-label="Toggle Button"
                                                                                                            class="toggle-container"
                                                                                                            id="field_hide_display">
                                                                                                            <div
                                                                                                                class="toggle-slider">
                                                                                                                <div tabindex="0"
                                                                                                                    class="toggle-knob">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </button>
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
                                                                            <div id="ConditionsTabPanel"
                                                                                class="tab-panel card p-1">
                                                                                <div class="publish-fields @container">
                                                                                    <div class="w-full">
                                                                                        <div
                                                                                            class="form-group publish-field select-fieldtype field-w-full">
                                                                                            <label
                                                                                                class="publish-field-label">Conditions</label>
                                                                                            <div
                                                                                                class="help-block -mt-2">
                                                                                                <p>When to show or hide
                                                                                                    this
                                                                                                    field.</p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="flex items-center mb-6">
                                                                                                <div
                                                                                                    class="select-input-container">
                                                                                                    <select
                                                                                                        class="select-input">
                                                                                                        <!---->
                                                                                                        <option
                                                                                                            value="always"
                                                                                                            selected="selected">
                                                                                                            Always show
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="if">
                                                                                                            Show when
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="unless">
                                                                                                            Hide when
                                                                                                        </option>
                                                                                                    </select>
                                                                                                    <div
                                                                                                        class="select-input-toggle">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 20 20">
                                                                                                            <path
                                                                                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!---->
                                                                                                <!---->
                                                                                            </div>
                                                                                            <!---->
                                                                                            <!---->
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group publish-field select-fieldtype field-w-full">
                                                                                            <label
                                                                                                class="publish-field-label">Always
                                                                                                Save</label>
                                                                                            <div
                                                                                                class="help-block -mt-2">
                                                                                                <p>Always save field
                                                                                                    value,
                                                                                                    even if field is
                                                                                                    hidden.
                                                                                                </p>
                                                                                            </div><button type="button"
                                                                                                aria-pressed="false"
                                                                                                aria-label="Toggle Button"
                                                                                                class="toggle-container">
                                                                                                <div
                                                                                                    class="toggle-slider">
                                                                                                    <div tabindex="0"
                                                                                                        class="toggle-knob">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="ValidationTabPanel"
                                                                                class="tab-panel card p-1">
                                                                                <div class="publish-fields @container">
                                                                                    <div data-v-7cc420c9=""
                                                                                        class="w-full">
                                                                                        <div data-v-7cc420c9=""
                                                                                            class="flex">
                                                                                            <div data-v-7cc420c9=""
                                                                                                class="form-group publish-field select-fieldtype field-w-full">
                                                                                                <label
                                                                                                    data-v-7cc420c9=""
                                                                                                    class="publish-field-label">Required</label>
                                                                                                <div data-v-7cc420c9=""
                                                                                                    class="help-block -mt-2">
                                                                                                    <p
                                                                                                        data-v-7cc420c9="">
                                                                                                        Control whether
                                                                                                        or
                                                                                                        not this field
                                                                                                        is
                                                                                                        required.</p>
                                                                                                </div><button
                                                                                                    data-v-7cc420c9=""
                                                                                                    type="button"
                                                                                                    aria-pressed="false"
                                                                                                    aria-label="Toggle Button"
                                                                                                    class="toggle-container">
                                                                                                    <div
                                                                                                        class="toggle-slider">
                                                                                                        <div tabindex="0"
                                                                                                            class="toggle-knob">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div data-v-7cc420c9=""
                                                                                                class="form-group publish-field select-fieldtype field-w-full">
                                                                                                <label
                                                                                                    data-v-7cc420c9=""
                                                                                                    class="publish-field-label">Sometimes</label>
                                                                                                <div data-v-7cc420c9=""
                                                                                                    class="help-block -mt-2">
                                                                                                    <p
                                                                                                        data-v-7cc420c9="">
                                                                                                        Only validate
                                                                                                        when
                                                                                                        this field is
                                                                                                        visible or
                                                                                                        submitted.</p>
                                                                                                </div><button
                                                                                                    data-v-7cc420c9=""
                                                                                                    type="button"
                                                                                                    aria-pressed="false"
                                                                                                    aria-label="Toggle Button"
                                                                                                    class="toggle-container">
                                                                                                    <div
                                                                                                        class="toggle-slider">
                                                                                                        <div tabindex="0"
                                                                                                            class="toggle-knob">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div data-v-7cc420c9=""
                                                                                            class="form-group publish-field select-fieldtype field-w-full">
                                                                                            <label data-v-7cc420c9=""
                                                                                                class="publish-field-label">Rules</label>
                                                                                            <div data-v-7cc420c9=""
                                                                                                class="help-block -mt-2">
                                                                                                <p data-v-7cc420c9="">
                                                                                                    Add
                                                                                                    more advanced
                                                                                                    validation
                                                                                                    to this field. <a
                                                                                                        data-v-7cc420c9=""
                                                                                                        href="https://laravel.com/docs/9.x/validation#available-validation-rules"
                                                                                                        target="_blank">Learn
                                                                                                        more</a>
                                                                                                    <!---->
                                                                                                </p>
                                                                                            </div>
                                                                                            <div data-v-7cc420c9=""
                                                                                                dir="auto"
                                                                                                class="v-select w-full vs--single vs--searchable"
                                                                                                name="rules">
                                                                                                <div id="vs46__combobox"
                                                                                                    role="combobox"
                                                                                                    aria-expanded="false"
                                                                                                    aria-owns="vs46__listbox"
                                                                                                    aria-label="Search for option"
                                                                                                    class="vs__dropdown-toggle">
                                                                                                    <div
                                                                                                        class="vs__selected-options">
                                                                                                        <input
                                                                                                            data-v-7cc420c9=""
                                                                                                            placeholder="Add Rule"
                                                                                                            aria-autocomplete="list"
                                                                                                            aria-labelledby="vs46__combobox"
                                                                                                            aria-controls="vs46__listbox"
                                                                                                            type="search"
                                                                                                            autocomplete="off"
                                                                                                            class="vs__search">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="vs__actions">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            title="Clear Selected"
                                                                                                            aria-label="Clear Selected"
                                                                                                            class="vs__clear"
                                                                                                            style="display: none;"><span>×</span></button>
                                                                                                        <span
                                                                                                            class="toggle vs__open-indicator"
                                                                                                            role="presentation"><svg
                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                height="16"
                                                                                                                width="16"
                                                                                                                viewBox="0 0 20 20">
                                                                                                                <path
                                                                                                                    fill="currentColor"
                                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                                </path>
                                                                                                            </svg></span>
                                                                                                        <div class="vs__spinner"
                                                                                                            style="display: none;">
                                                                                                            Loading...
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul id="vs46__listbox"
                                                                                                    role="listbox"
                                                                                                    style="display: none; visibility: hidden;">
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div data-v-7cc420c9=""
                                                                                                class="v-select">
                                                                                                <div data-v-7cc420c9=""
                                                                                                    class="vs__selected-options-outside flex flex-wrap outline-none"
                                                                                                    tabindex="0"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <path d="m7.5 8 2.5 2.5L7.5 13m5.5-2h4"></path>
                                                            <rect width="23" height="20" x=".5" y="2" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="19" height="16" x="2.5" y="4" rx=".5" ry=".5">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Code</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 16 16" class="h-5 w-5 text-gray-800">
                                                        <g stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width=".667">
                                                            <path
                                                                d="M.5 3.5c0-.736.597-1.333 1.333-1.333h12.334c.736 0 1.333.597 1.333 1.333v9c0 .736-.597 1.333-1.333 1.333H1.833A1.333 1.333 0 0 1 .5 12.5v-9z">
                                                            </path>
                                                            <path stroke-linecap="round"
                                                                d="M3.333 10.667V5.333l2 3.2 2-3.2v5.334m4-5.334v5.334m-2-2 2 2 2-2">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Markdown</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <path
                                                                d="M17.5 7.498v9M13.5 3.5a4 4 0 0 1 4 4 4 4 0 0 1 4-4m-8 17a4 4 0 0 0 4-4 4 4 0 0 0 4 4">
                                                            </path>
                                                            <rect width="23" height="9" x=".5" y="7.498" rx="1" ry="1">
                                                            </rect>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Text</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="23" height="23" x=".5" y=".5" rx="1"></rect>
                                                            <path
                                                                d="M4 6.5V5h6v1.5m-3 4.25V5m6.25 0h6.25m-6.25 4.5h6.25M4 14h15.5M4 18.5h15.5">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Textarea</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Buttons &amp; Controls</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that provide selectable options or
                                    buttons that can
                                    control logic.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg viewBox="0 0 16 16" class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M3.833 8A.833.833 0 1 0 5.5 8a.833.833 0 1 0-1.667 0Zm3.334 0a.833.833 0 1 0 1.666 0 .833.833 0 1 0-1.666 0ZM10.5 8a.833.833 0 1 0 1.667 0A.833.833 0 1 0 10.5 8Z">
                                                            </path>
                                                            <path d="M.333.333h15.334v15.334H.333Z"></path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Button
                                                    Group</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="m15 .833-7.867 9.754a.667.667 0 0 1-.993.08L3.333 7.833">
                                                            </path>
                                                            <path
                                                                d="M13 7.5v7a.667.667 0 0 1-.667.667H1.667A.667.667 0 0 1 1 14.5V3.833a.667.667 0 0 1 .667-.666h7.666">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Checkboxes</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <circle cx="12" cy="12" r="11.5"></circle>
                                                            <circle cx="12" cy="12" r="4.5"></circle>
                                                            <circle cx="12" cy="12" r=".5"></circle>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Radio</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M9 16.25a3.75 3.75 0 1 1 0-7.5 3.75 3.75 0 0 1 0 7.5zM.751 12.5h1.5m13.5 0h7.5">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Range</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <path d="M3 8s2-3 5-3 5 3 5 3-2 3-5 3-5-3-5-3z"></path>
                                                            <path
                                                                d="M8 9.2h0c-.7 0-1.2-.5-1.2-1.2v0c0-.7.6-1.2 1.2-1.2h0c.7 0 1.2.6 1.2 1.2v0c0 .7-.5 1.2-1.2 1.2zM.5 3V1.5c0-.6.4-1 1-1H3M15.5 3V1.5c0-.6-.4-1-1-1H13M.5 13v1.5c0 .6.4 1 1 1H3M15.5 13v1.5c0 .6-.4 1-1 1H13">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Revealer</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="22.956" height="12" x=".522" y="6" rx="1">
                                                            </rect>
                                                            <path d="M14.478 6.25V18m3.044-7 1.5 2 1.5-2"></path>
                                                            <circle cx="4.264" cy="14.61" r=".25"></circle>
                                                            <circle cx="7.514" cy="14.61" r=".25"></circle>
                                                            <circle cx="10.764" cy="14.61" r=".25"></circle>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Select</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-miterlimit="2.667"
                                                            stroke-width=".445"
                                                            d="M3.667 4.667h8.666A3.301 3.301 0 0 1 15.667 8h0a3.301 3.301 0 0 1-3.334 3.333H3.667A3.301 3.301 0 0 1 .333 8h0a3.301 3.301 0 0 1 3.334-3.333z">
                                                        </path>
                                                        <circle cx="11.6" cy="8" r="1.3" fill="none" stroke="#000"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-miterlimit="2.667" stroke-width=".667"></circle>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Toggle</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m17.5 14.999 3-3-3-3m-14 3h17m-14 3-3-3 3-3m-6-3.5v13m23-13v13">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Width</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Media</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that store images, videos, or other
                                    media.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m15.543 15.543-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 0 0-1.155.089l-2.486 4.142">
                                                        </path>
                                                        <rect width="17" height="17" x="1.543" y="1.543" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" rx="1" ry="1"></rect>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m20.551 7.424 1 .091a1 1 0 0 1 .901 1.085l-1.181 12.948a1 1 0 0 1-1.087.9L6.243 21.18m-4.7-5.637h17">
                                                        </path>
                                                        <circle cx="6.043" cy="6.043" r="1.5" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"></circle>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Assets</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5"
                                                        viewBox="0 0 24 24" class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m6 23.249-1.9-3.326a2.263 2.263 0 0 1 3.848-2.378l1.8 2.7V9a2.25 2.25 0 1 1 4.5 0v8.25h3.379a4.332 4.332 0 0 1 4.123 4.35v1.653M18 .749l5.25 5.25M18 5.999l5.25-5.25M7.5.749l-3.75 5.25-3-3">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Icon</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="23" height="23" x=".5" y=".5" rx="3"></rect>
                                                            <circle cx="12" cy="16.5" r="4.5"></circle>
                                                            <path
                                                                d="M16.5 16.5H20a.51.51 0 0 0 .5-.5V4a.51.51 0 0 0-.5-.5H4a.51.51 0 0 0-.5.5v12a.51.51 0 0 0 .5.5h3.5m-4 4H6m12 0h2.5">
                                                            </path>
                                                            <path d="M10.5 18.5v-4l4 2-4 2z"></path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Video</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Number</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that store numbers.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15.9"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".75"
                                                            d="M5.1 11V5.5c0-.2-.1-.4-.3-.4-.1-.1-.3-.1-.5 0L3.1 6m1 5h2">
                                                        </path>
                                                        <circle cx="10" cy="6.5" r="1.5" fill="none" stroke="#000"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width=".75"></circle>
                                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".75"
                                                            d="M9.5 11c1.1 0 2-.9 2-2V6.5M7.8 11h0"></path>
                                                        <path fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".75"
                                                            d="M.5.5h14v14.9H.5V.5z"></path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Float</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="23" height="15" x=".5" y="4.5" rx="1"></rect>
                                                            <path
                                                                d="M12.452 15.5H17m-12.5 0h4m-4-5.5 1.323-1.323A.6.6 0 0 1 6.25 8.5a.25.25 0 0 1 .25.25v6.75">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Integer</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Relationship</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that store relationships to other
                                    resources.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m15.543 15.543-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 0 0-1.155.089l-2.486 4.142">
                                                        </path>
                                                        <rect width="17" height="17" x="1.543" y="1.543" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" rx="1" ry="1"></rect>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m20.551 7.424 1 .091a1 1 0 0 1 .901 1.085l-1.181 12.948a1 1 0 0 1-1.087.9L6.243 21.18m-4.7-5.637h17">
                                                        </path>
                                                        <circle cx="6.043" cy="6.043" r="1.5" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"></circle>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Assets</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M11.326 8.667a1 1 0 0 0-1-1h-6l-.707-.708a1 1 0 0 0-.707-.292H1.326a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1z">
                                                            </path>
                                                            <path
                                                                d="M12.493 12.5a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6l-.707-.707a1 1 0 0 0-.707-.293H3.493a1 1 0 0 0-1 1v.659">
                                                            </path>
                                                            <path
                                                                d="M14.674 9.333a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6L7.967.626A1 1 0 0 0 7.26.333H5.674a1 1 0 0 0-1 1v.659">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Collections</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M15.667 1A.667.667 0 0 0 15 .333H3A.667.667 0 0 0 2.333 1v12a.667.667 0 0 0 .667.667h12a.667.667 0 0 0 .667-.667zM4.997 2.998h8m-8 2.667h8m-8 2.666h8m-8 2.667h3.67">
                                                            </path>
                                                            <path
                                                                d="M2.333 3H1a.667.667 0 0 0-.667.667V15a.667.667 0 0 0 .667.667h11.333A.667.667 0 0 0 13 15v-1.333">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Entries</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M6.333 15.667H1A.667.667 0 0 1 .333 15V2.333A.667.667 0 0 1 1 1.667h1.333m8 0h1.334a.667.667 0 0 1 .666.666V7M7.667 1.667a1.333 1.333 0 0 0-2.667 0H3.667v2H9v-2z">
                                                            </path>
                                                            <path
                                                                d="M11 7V3.333A.333.333 0 0 0 10.667 3H9M3.667 3H2a.333.333 0 0 0-.333.333V14a.333.333 0 0 0 .333.333h4.333M3.667 5.666H9m-5.333 2H9m-5.333 2h2.666m4.134 5.201-2.8.8.8-2.8 4.786-4.786a1.414 1.414 0 0 1 2 2zm2.186-6.187 2 2m-6.186 2.186 2 2">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Form</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="m13.414 12.588 1.414-1.414a1.333 1.333 0 1 0-1.885-1.886l-1.414 1.415m-.944.942L9.172 13.06a1.334 1.334 0 0 0 1.885 1.887l1.414-1.413m.708-2.595-2.358 2.356M1.333 3.45h13.334M3.333 1.95h0m0 0a.167.167 0 1 0 .167.167.167.167 0 0 0-.167-.166m1.334-.001h0m0 0a.167.167 0 1 0 .166.167.167.167 0 0 0-.166-.166M6 1.95h0m0 0a.167.167 0 1 0 .167.167A.167.167 0 0 0 6 1.951">
                                                            </path>
                                                            <path
                                                                d="M6.667 11.45h-4a1.333 1.333 0 0 1-1.334-1.333v-8A1.333 1.333 0 0 1 2.667.784h10.666a1.333 1.333 0 0 1 1.334 1.333v4">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Link</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M1.67 6.333v1.666m0 1.667v1.667m0-7.666v.666A.667.667 0 0 0 2.337 5h.666M1.67 13v.667a.667.667 0 0 0 .667.666h.666M4.667 5h2m-2 9.333h2M1.67.333v1.666m11.997 4.334A.667.667 0 0 1 13 7H9a.667.667 0 0 1-.667-.667V1A.667.667 0 0 1 9 .333h2a1.855 1.855 0 0 1 1.138.472l1.057 1.057A1.855 1.855 0 0 1 13.667 3z">
                                                            </path>
                                                            <path
                                                                d="M11.333.38V2a.667.667 0 0 0 .667.667h1.62M13.667 15a.667.667 0 0 1-.667.667H9A.667.667 0 0 1 8.333 15V9.667A.667.667 0 0 1 9 9h2.076a1.426 1.426 0 0 1 1.009.418l1.11 1.11a1.855 1.855 0 0 1 .472 1.139z">
                                                            </path>
                                                            <path d="M11.333 9.024v1.643a.667.667 0 0 0 .667.666h1.62">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Navs</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M.5 6.504h20m-17-2.25h0m0 0a.25.25 0 1 0 .25.25.25.25 0 0 0-.25-.25m2 0h0m0 0a.25.25 0 1 0 .25.25.25.25 0 0 0-.25-.25m2 0h0m0 0a.25.25 0 1 0 .25.25.25.25 0 0 0-.25-.25">
                                                        </path>
                                                        <rect width="20" height="15" x=".5" y="2.504" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" rx="2" ry="2"></rect>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M20.5 10.504h3m-3-4.004h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2h-16a2 2 0 0 1-2-2v-2">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Sites</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M1.67 6.333v1.666m0 1.667v1.667m0-7.666v.666A.667.667 0 0 0 2.337 5h.666M1.67 13v.667a.667.667 0 0 0 .667.666h.666M4.667 5h2m-2 9.333h2M1.67.333v1.666m11.997 4.334A.667.667 0 0 1 13 7H9a.667.667 0 0 1-.667-.667V1A.667.667 0 0 1 9 .333h2a1.855 1.855 0 0 1 1.138.472l1.057 1.057A1.855 1.855 0 0 1 13.667 3z">
                                                            </path>
                                                            <path
                                                                d="M11.333.38V2a.667.667 0 0 0 .667.667h1.62M13.667 15a.667.667 0 0 1-.667.667H9A.667.667 0 0 1 8.333 15V9.667A.667.667 0 0 1 9 9h2.076a1.426 1.426 0 0 1 1.009.418l1.11 1.11a1.855 1.855 0 0 1 .472 1.139z">
                                                            </path>
                                                            <path d="M11.333 9.024v1.643a.667.667 0 0 0 .667.666h1.62">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Structures</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <path d="M12 5.499v13M3 18.5a6 6 0 0 1 6-6h6a6 6 0 0 1 6 6">
                                                            </path>
                                                            <rect width="5" height="5" x="9.5" y=".499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x="9.5" y="18.499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x=".5" y="18.499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x="18.5" y="18.499" rx="1"
                                                                ry="1"></rect>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Taxonomies</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <path d="M12 5.499v13M3 18.5a6 6 0 0 1 6-6h6a6 6 0 0 1 6 6">
                                                            </path>
                                                            <rect width="5" height="5" x="9.5" y=".499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x="9.5" y="18.499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x=".5" y="18.499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="5" height="5" x="18.5" y="18.499" rx="1"
                                                                ry="1"></rect>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Taxonomy
                                                    Terms</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667"
                                                            d="M11.333 13.133c2.566.217 4.334.674 4.334 1.2 0 .734-3.432 1.334-7.667 1.334s-7.667-.6-7.667-1.334c0-.526 1.757-.982 4.306-1.2m7.528-9.966a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0zm1.5 2.166a2 2 0 0 0-2 2V9h1L13 12h1.333l.334-3h1V7.333a2 2 0 0 0-2-2zM.833 3.167a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0zm1.5 2.166a2 2 0 0 0-2 2V9h1l.334 3H3l.333-3h1V7.333a2 2 0 0 0-2-2zm3.834-3.166a1.833 1.833 0 1 0 3.666 0 1.833 1.833 0 1 0-3.666 0zM10.333 7a2.333 2.333 0 0 0-4.666 0v2h1.055L7 12.333h2L9.278 9h1.055z">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">User
                                                    Groups</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M9 6a3.667 3.667 0 1 0-4.667 3.525v.808L3.667 11l.666.667v.666L3.667 13l.666.667v1l1 1 1-1V9.525A3.667 3.667 0 0 0 9 6z">
                                                            </path>
                                                            <path
                                                                d="M4 4.999a1.333 1.333 0 1 0 2.667 0 1.333 1.333 0 1 0-2.667 0zm2.333 5.01a3.671 3.671 0 0 0 3.617.022l.717.636v1h1l.333.35V13h.878l.708.667H15v-1.414l-3.636-3.636a3.667 3.667 0 0 0-3.667-5.422">
                                                            </path>
                                                            <path d="M5.333 4.667v-3a1.333 1.333 0 0 1 2.667 0v1.502">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">User
                                                    Roles</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M.333 6.333h15.334m-6-2.666H15a.667.667 0 0 1 .667.666v10A.667.667 0 0 1 15 15H1a.667.667 0 0 1-.667-.667v-10A.667.667 0 0 1 1 3.667h5.333m3.667 6h4m-4 2h2.333">
                                                            </path>
                                                            <path
                                                                d="M8.642 13.333c-.272-.42-1.174-.725-2.303-1.143-.319-.119-.267-.95-.126-1.106a2.35 2.35 0 0 0 .612-1.823 1.459 1.459 0 0 0-1.492-1.594A1.459 1.459 0 0 0 3.841 9.26a2.35 2.35 0 0 0 .612 1.823c.142.155.194.987-.125 1.106-1.128.418-2.031.723-2.303 1.143m7.642-8.665A.333.333 0 0 1 9.333 5H6.667a.333.333 0 0 1-.334-.333v-2a1.667 1.667 0 0 1 3.334 0z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Users</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Structured</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">Fields that store structured data. Some can
                                    even nest other
                                    fields inside themselves.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="13" height="3" x=".5" y=".499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="13" height="3" x="10.5" y="12.499" rx="1"
                                                                ry="1"></rect>
                                                            <rect width="13" height="3" x="10.5" y="20.499" rx="1"
                                                                ry="1"></rect>
                                                            <path
                                                                d="M17.5 15.499v5M7.5 3.5V8A1.5 1.5 0 0 0 9 9.5h7a1.5 1.5 0 0 1 1.5 1.5v1.5">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Array</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M2 1.067c6.82-3.274 6.9 4.713 12 1.14 1.113-.787 2.527.44 1.08 2.333l-8.413 9.533">
                                                            </path>
                                                            <path
                                                                d="M2 3.26c5.473-2.707 6.6 4 10.667 1.147L2.333 14.073m-2 0V1.24A.833.833 0 0 1 2 1.24v12.833M3.667 2.68v10.147m1.666-10.14v8.58M7 3.347v6.36M8.667 4.42v3.733m-1 5.92H.333v1A.667.667 0 0 0 1 15.74h6a.667.667 0 0 0 .667-.667z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Bard</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M14.333 3A1.333 1.333 0 0 1 13 4.333H1.667A1.333 1.333 0 0 1 .333 3V1.667A1.333 1.333 0 0 1 1.667.333H13a1.333 1.333 0 0 1 1.333 1.334z">
                                                            </path>
                                                            <path
                                                                d="M1.667 8.333A1.333 1.333 0 0 1 .333 7V5.667a1.333 1.333 0 0 1 1.334-1.334H13a1.333 1.333 0 0 1 1.333 1.334v1m-11.166-4.5a.167.167 0 1 0 .166.166.167.167 0 0 0-.166-.166h0m2.333 0a.167.167 0 1 0 .167.166.167.167 0 0 0-.167-.166h0">
                                                            </path>
                                                            <path
                                                                d="M3.167 6.167a.167.167 0 1 0 .166.166.167.167 0 0 0-.166-.166h0m2.333 0a.167.167 0 1 0 .167.166.167.167 0 0 0-.167-.166h0m.5 6.166H1.667A1.333 1.333 0 0 1 .333 11V9.667a1.333 1.333 0 0 1 1.334-1.334H7">
                                                            </path>
                                                            <path
                                                                d="M3.167 10.167a.167.167 0 1 0 .166.166.167.167 0 0 0-.166-.166h0m2.333 0a.167.167 0 1 0 .167.166.167.167 0 0 0-.167-.166h0m2.167 1.5a4 4 0 1 0 8 0 4 4 0 1 0-8 0zm4-2v4m2-2h-4">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Grid</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M1.438.477h20.125s.958 0 .958.959V21.56s0 .958-.959.958H1.438s-.958 0-.958-.958V1.436s0-.959.959-.959m11.499 5.75h6.708m-9.583 3.833h9.583m-9.583 3.834h9.583m-9.583 3.833h6.708">
                                                        </path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M3.833 4.31h2.875s.48 0 .48.48v2.875s0 .479-.48.479H3.833s-.479 0-.479-.48V4.79s0-.48.48-.48m-.001 5.75h2.875s.48 0 .48.48v2.875s0 .479-.48.479H3.833s-.479 0-.479-.48V10.54s0-.48.48-.48m-.001 5.75h2.875s.48 0 .48.48v2.875s0 .479-.48.479H3.833s-.479 0-.479-.48V16.29s0-.48.48-.48">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Group</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667"
                                                            d="M3 1.665h9.333M3 4.999h9.333M3 8.332h4m-4 3.333h4m-6.667-10H1M.333 4.999H1M.333 8.332H1m-.667 3.333H1m8 .667a3.333 3.333 0 1 0 6.667 0 3.333 3.333 0 1 0-6.667 0zm5 0h-3.333m1.666 1.667v-3.334">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">List</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="23" height="8" x=".5" y="2.5" rx="1" ry="1">
                                                            </rect>
                                                            <path
                                                                d="M3 4.5h8m-8 2h5m-5 2h3.5m9-6v8M21 5.54a.5.5 0 0 0-.812-.39l-1.2.96a.5.5 0 0 0 0 .78l1.2.96A.5.5 0 0 0 21 7.46z">
                                                            </path>
                                                            <rect width="23" height="8" x=".5" y="13.5" rx="1" ry="1">
                                                            </rect>
                                                            <path
                                                                d="M3 15.5h8m-8 2h5m-5 2h3.5m9-6v8m5.5-4.96a.5.5 0 0 0-.812-.39l-1.2.96a.5.5 0 0 0 0 .78l1.2.96a.5.5 0 0 0 .812-.39z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Replicator</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="21" height="23" x="1.5" y=".5" rx="2"></rect>
                                                            <path
                                                                d="M1.5 5.5h21m-21 6h21m-21 6h21m-14-12v18m7-18v18M4 8.5h2m-2 6h2m-2 6h2">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Table</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M23.03 14.545a.552.552 0 0 1-.249 1l-5.544 1.692-1.693 5.543a.551.551 0 0 1-1 .249L1.452 9.938a2.789 2.789 0 0 1-.708-1.707L.738 1.737a1 1 0 0 1 1-1h6.491a2.782 2.782 0 0 1 1.707.707z">
                                                        </path>
                                                        <circle cx="5.737" cy="5.737" r="2" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"></circle>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Taggable</span>
                                            </button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="px-2 mb-1">Special</h2>
                                <p class="px-2 mb-2 text-gray-700 text-sm">These fields are special, each in their own
                                    way.</p>
                                <div class="fieldtype-selector">
                                    <div class="fieldtype-list">
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M5.139 2.5a2 2 0 1 1 .001 3.999 2 2 0 0 1 0-3.999zm0 6a2 2 0 1 1 .001 3.999 2 2 0 0 1 0-3.999zm0 6a2 2 0 1 1 .001 3.999 2 2 0 0 1 0-3.999z">
                                                            </path>
                                                            <path
                                                                d="M9.139 19.5a4 4 0 0 1-8 0v-17a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v17z">
                                                            </path>
                                                            <path
                                                                d="M8.568 21.56 17.1 6.777a2 2 0 0 0-.732-2.732l-3.464-2a2 2 0 0 0-2.732.731l-.001.001-1.035 1.8">
                                                            </path>
                                                            <path
                                                                d="m22.593 11.732-2-3.464a2 2 0 0 0-2.732-.732l-1.794 1.036L8.6 21.5a3.983 3.983 0 0 1-1.415 1.436l14.673-8.472a2 2 0 0 0 .735-2.732c0 .001 0 0 0 0zM5.139 20.749a.25.25 0 1 1 0 .5.25.25 0 0 1 0-.5">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Color</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="23" height="21" x=".5" y="2.501" rx="1" ry="1">
                                                            </rect>
                                                            <path d="M5.5.501v5m13-5v5m-18 2h23"></path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Date</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M.91 12.59a1 1 0 0 1 0-1.18C2.11 9.8 5.9 5.5 12 5.5s9.89 4.3 11.09 5.91a1 1 0 0 1 0 1.18c-1.2 1.61-5 5.91-11.09 5.91S2.11 14.2.91 12.59Z">
                                                            </path>
                                                            <path
                                                                d="M7.76 13.5A4.38 4.38 0 0 1 7.5 12 4.49 4.49 0 0 1 12 7.5a4.38 4.38 0 0 1 1.5.26M15.18 8.82a4.5 4.5 0 1 1-6.36 6.36M17 7 6.75 17.25">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Hidden</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".333"
                                                            d="M1.833 3.835V6.5M.5 6.501V3.835m0 1.333h1.333M4.5 6.501V3.835l.667 1.333.666-1.333V6.5M6.5 3.833V6a.5.5 0 0 0 .5.5h.833M2.5 3.835h1.333m-.666 0V6.5m4.666 1a.333.333 0 0 1-.333.333h-7A.333.333 0 0 1 .167 7.5m0-4.667V.5A.333.333 0 0 1 .5.167h7A.333.333 0 0 1 7.833.5v2.333">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">HTML</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <path d="M3 8s2-3 5-3 5 3 5 3-2 3-5 3-5-3-5-3z"></path>
                                                            <path
                                                                d="M8 9.2h0c-.7 0-1.2-.5-1.2-1.2v0c0-.7.6-1.2 1.2-1.2h0c.7 0 1.2.6 1.2 1.2v0c0 .7-.5 1.2-1.2 1.2zM.5 3V1.5c0-.6.4-1 1-1H3M15.5 3V1.5c0-.6-.4-1-1-1H13M.5 13v1.5c0 .6.4 1 1 1H3M15.5 13v1.5c0 .6-.4 1-1 1H13">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Revealer</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M15.667 1.333A.667.667 0 0 0 15 .667H1a.667.667 0 0 0-.667.666v13.334a.667.667 0 0 0 .667.666h14a.667.667 0 0 0 .667-.666z">
                                                            </path>
                                                            <path
                                                                d="M13.667 6a.333.333 0 0 1-.334.333H2.667A.333.333 0 0 1 2.333 6V3a.333.333 0 0 1 .334-.333h10.666a.333.333 0 0 1 .334.333zM2.333 8.333H7m-4.667 2H7m-4.667 2H7m2-4h4.667m-4.667 2h4.667m-4.667 2h4.667">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Section</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M1.012 11.942a8.5 8.5 0 0 1 15.022-7.685M15.01 15.041l2.333 2.332M23 20.909a1.5 1.5 0 1 1-2.121 2.121l-3.889-3.889a1 1 0 0 1 0-1.414l.707-.707a1 1 0 0 1 1.414 0z">
                                                        </path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m.5 15.53 8.793-8.793a1 1 0 0 1 1.414 0l2.586 2.586a1 1 0 0 0 1.414 0L23.5.53">
                                                        </path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M20.5.53h3v3m-6.015 6.016a8.5 8.5 0 0 1-13.923 6.017">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Seo
                                                    Pro</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667"
                                                            d="M14.333 15.667H15a.667.667 0 0 0 .667-.667v-.667m-12 1.334H3A.667.667 0 0 1 2.333 15v-.667m10 1.332H10m-2 0H5.667m8.666-13.332H15a.667.667 0 0 1 .667.667v.667m-3.334-1.335H10m5.667 10V9.999m0-2V5.665M2.333 12.332V9.999M11 6.385v6.227M9 5.719a1.95 1.95 0 0 1 2 .666m2-.666a1.95 1.95 0 0 0-2 .666m-2 6.894a1.95 1.95 0 0 0 2-.667m2 .667a1.95 1.95 0 0 1-2-.667m-1.333-1.947h2.666m-8.25-6.583 2.762-.69a.333.333 0 0 0 .042-.635L.789.355a.333.333 0 0 0-.432.433l2.4 6.097a.333.333 0 0 0 .634-.042z">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Slug</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-5 w-5 text-gray-800">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m17.5 14.999 3-3-3-3m-14 3h17m-14 3-3-3 3-3m-6-3.5v13m23-13v13">
                                                        </path>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Spacer</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="22" height="22" x=".5" y=".497" rx="1" ry="1">
                                                            </rect>
                                                            <path d="M.5 6.497h22m-15 0v16m0-8h15"></path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Template</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width=".667">
                                                            <path
                                                                d="M.333 8a7.667 7.667 0 1 0 15.334 0A7.667 7.667 0 1 0 .333 8zM12 12 8.705 8.707">
                                                            </path>
                                                            <path d="M7 8a1 1 0 1 0 2 0 1 1 0 1 0-2 0zm1-3.666v2.667">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">Time</span>
                                            </button></div>
                                        <div class="p-2"><button
                                                class="bg-white border border-gray-500 flex items-center group w-full rounded hover:border-gray-600 shadow-sm hover:shadow-md rtl:pl-3 ltr:pr-3">
                                                <div
                                                    class="p-2 flex items-center rtl:border-l ltr:border-r border-gray-500 group-hover:border-gray-600 bg-gray-200 rtl:rounded-r ltr:rounded-l">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        class="h-5 w-5 text-gray-800">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" transform="scale(.66667)">
                                                            <rect width="13" height="3" x=".5" y=".499" rx="1" ry="1">
                                                            </rect>
                                                            <rect width="13" height="3" x="10.5" y="12.499" rx="1"
                                                                ry="1"></rect>
                                                            <rect width="13" height="3" x="10.5" y="20.499" rx="1"
                                                                ry="1"></rect>
                                                            <path
                                                                d="M17.5 15.499v5M7.5 3.5V8A1.5 1.5 0 0 0 9 9.5h7a1.5 1.5 0 0 1 1.5 1.5v1.5">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div><span
                                                    class="rtl:pr-3 ltr:pl-3 text-gray-800 text-md group-hover:text-gray-900">YAML</span>
                                            </button></div>
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