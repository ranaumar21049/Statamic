@extends('layouts.main')

@section('title', 'Configure Global Set')

@section('content')
    <div class="page-wrapper max-w-xl">
        <header class="mb-6">
            <div class="flex"><a href="{{ route('globals.index') }}"
                    class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                    <div class="h-6 rotate-180 svg-icon using-svg"><svg viewBox="0 0 24 24" class="align-middle">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg></div> <span>{{ $globals->title }}</span>
                </a></div>
            <h1>Configure Global Set</h1>
        </header>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('globals.update', $globals->handle) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <div>
                        <div class="mb-2 content">
                            <h2 class="text-base">Name</h2>
                            <p></p>
                        </div>
                        <div>
                            <div class="publish-sections">
                                <div class="publish-sections-section">
                                    <div class="p-0 card"><!---->
                                        <div class="publish-fields @container">
                                            <div
                                                class="form-group publish-field publish-field__title text-fieldtype w-full">
                                                <div class="field-inner"><label for="field_title"
                                                        class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                            class="required rtl:ml-1 ltr:mr-1">*</i><!----><!----><!----><button
                                                            class="outline-none" style="display: none;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                <path fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="1.5"
                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                </path>
                                                            </svg></button><button class="outline-none"
                                                            style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                <path fill="none" stroke="currentColor"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="1.5"
                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                </path>
                                                            </svg></button></label>
                                                    <div class="help-block -mt-2">
                                                        <p>We recommend a noun representing the set's contents. eg. "Brand"
                                                            or "Company"</p>
                                                    </div>
                                                </div><!---->
                                                <div class="flex items-center">
                                                    <div class="input-group"><!----><input id="field_title" name="title"
                                                            type="text" autofocus="autofocus" class="input-text"
                                                            value="{{ $globals->handle }}"><!----></div><!---->
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div>
                <div class="mb-2 content">
                  <h2 class="text-base">Content Model</h2>
                  <p></p>
                </div>
                <div>
                  <div class="publish-sections">
                    <div class="publish-sections-section">
                      <div class="p-0 card"><!---->
                        <div class="publish-fields @container">
                          <div class="form-group publish-field publish-field__blueprint html-fieldtype w-full">
                            <div class="field-inner"><label for="field_blueprint" class="publish-field-label"><span
                                  class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Blueprint</span><!----><!----><!----><!----><button
                                  class="outline-none" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="1.5"
                                      d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                    </path>
                                  </svg></button><button class="outline-none" style="display: none;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="1.5"
                                      d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                    </path>
                                  </svg></button></label>
                              <div class="help-block -mt-2">
                                <p>Controls the fields to be displayed when editing the variables.</p>
                              </div>
                            </div><!---->
                            <div>
                              <div class="text-xs"> <a href="https://demo.statamic.com/cp/globals/company/blueprint"
                                  class="text-blue">Edit</a></div>
                            </div><!----><!---->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="publish-tab publish-tab-actions-footer vue-portal-target "></div> 
            </div> --}}
                    <div class="py-4 border-t flex justify-between"><a
                            href="{{ route('globals.show', ['global' => $globals->handle]) }}"
                            class="btn">Cancel</a><button type="submit" class="btn-primary">Save</button></div>
                </div>
        </form>
    </div>
@endsection
