@extends('layouts.main')
@section('content')
    <title>Forms view :: Cedar</title>
    <div class="page-wrapper max-w-xl">
          <div class="flex"><a href="https://demo.statamic.com/cp/forms/contact"
              class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
              <div class="h-6 rotate-180 svg-icon using-svg"><svg viewBox="0 0 24 24" class="align-middle">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                </svg></div> <span>Contact</span>
            </a></div>
          <div><!---->
            <div class="flex items-center mb-6">
              <h1 class="flex-1">2022-11-10 18:33</h1><!---->
            </div>
            <div><!---->
              <div class="publish-tab-outer">
                <div class="publish-tab-wrapper w-full min-w-0">
                  <div data-tab-handle="main" tabindex="0" class="publish-tab tab-panel w-full">
                    <div class="publish-sections">
                      <div class="publish-sections-section">
                        <div class="p-0 card"><!---->
                          <div class="publish-fields @container">
                            <div
                              class="form-group publish-field publish-field__name text-fieldtype read-only-field w-full">
                              <div class="field-inner"><label for="field_name" class="publish-field-label"><span
                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Name</span><i
                                    class="required rtl:ml-1 ltr:mr-1">*</i><!----><span
                                    class="text-gray-500 font-normal text-2xs rtl:ml-1 ltr:mr-1"> Read Only
                                  </span><!----><!----><!----></label><!----></div><!---->
                              <div class="flex items-center">
                                <div class="input-group"><!----><input id="field_name" name="name" type="text"
                                    readonly="readonly" placeholder="Name" class="input-text"
                                    value="Biff Tannen"><!----></div><!---->
                              </div><!----><!---->
                            </div>
                            <div
                              class="form-group publish-field publish-field__email text-fieldtype read-only-field w-full">
                              <div class="field-inner"><label for="field_email" class="publish-field-label"><span
                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Email</span><i
                                    class="required rtl:ml-1 ltr:mr-1">*</i><!----><span
                                    class="text-gray-500 font-normal text-2xs rtl:ml-1 ltr:mr-1"> Read Only
                                  </span><!----><!----><!----></label><!----></div><!---->
                              <div class="flex items-center">
                                <div class="input-group"><!----><input id="field_email" name="email" type="email"
                                    readonly="readonly" placeholder="Email Address" class="input-text"
                                    value="biff@aol.com"><!----></div><!---->
                              </div><!----><!---->
                            </div>
                            <div
                              class="form-group publish-field publish-field__note textarea-fieldtype read-only-field w-full">
                              <div class="field-inner"><label for="field_note" class="publish-field-label"><span
                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Note</span><i
                                    class="required rtl:ml-1 ltr:mr-1">*</i><!----><span
                                    class="text-gray-500 font-normal text-2xs rtl:ml-1 ltr:mr-1"> Read Only
                                  </span><!----><!----><!----></label><!----></div><!---->
                              <div name="note"><textarea id="field_note" readonly="readonly"
                                  placeholder="Your note goes here..." class="input-text"
                                  style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 86px;">Hello?
                                    Hello? Anybody home, huh, Think, McFly! Think! I gotta have time to get
                                    it retyped. Do you realize what what would happen if I handed in my 
                                    reports in your handwriting? I’ll get fired. You wouldn’t want that to 
                                    happen would ya? WOULD YA?!</textarea> <!----></div><!----><!---->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="publish-tab">
                    <div class="publish-tab-actions">
                      <div class="v-portal" style="display: none;"></div>
                    </div><!---->
                  </div>
                </div>
              </div>
              <div class="publish-tab publish-tab-actions-footer vue-portal-target "></div>
            </div>
          </div>
        </div>
@endsection
