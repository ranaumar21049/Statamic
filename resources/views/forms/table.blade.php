@php 
  $menuItems = [
    ['label' => 'view', 'route' => route('dashboard')],
    ['label' => 'delete', 'route' => route('dashboard')]
    ];
@endphp

@extends('layouts.main')

@section('content')
    <title>Forms table :: Cedar</title>
    <div class="page-wrapper max-w-full">
          <header class="mb-6">
            <div class="flex"><a href="https://demo.statamic.com/cp/forms"
                class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                <div class="h-6 rotate-180 svg-icon using-svg"><svg viewBox="0 0 24 24" class="align-middle">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                  </svg></div> <span>Forms</span>
              </a></div>
            <div class="flex items-center">
              <h1 class="flex-1">
                Contact
              </h1>
              <div class="dropdown-list rtl:ml-2 ltr:mr-2">
                <div aria-haspopup="true"><button aria-label="Open Dropdown" class="rotating-dots-button"><svg
                      width="12" viewBox="0 0 24 24" class="rotating-dots fill-current">
                      <circle cx="3" cy="12" r="3"></circle>
                      <circle cx="12" cy="12" r="3"></circle>
                      <circle cx="21" cy="12" r="3"></circle>
                    </svg></button></div>
                <div class="v-portal" style="display: none;"></div>
              </div>
              <div class="dropdown-list">
                <div aria-haspopup="true"><button class="btn">Export Submissions</button></div>
                <div class="v-portal" style="display: none;"></div>
              </div>
            </div>
          </header>
          <div class="metrics mb-6"></div>
          <div><!---->
            <div>
              <div class="card overflow-hidden p-0 relative">
                <div class="flex flex-wrap items-center justify-between p-2 text-sm border-b"><input type="text"
                    placeholder="Search" autofocus="autofocus"
                    class="input-text flex-1 bg-white text-sm focus:border-blue-300 outline-0 h-8 min-w-[240px] w-full">
                  <div class="rtl:mr-2 ltr:ml-2"><button
                      class="btn py-1 px-1 h-8 w-8 flex items-center justify-center v-popper--has-tooltip"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z">
                          </path>
                          <path
                            d="M13.414 4.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M14 5.5h6.52m-17 0H10m-.586 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M10 12h10.52m-17 0H6m5.414 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M12 18.5h8.52m-17 0H8">
                          </path>
                        </g>
                      </svg></button><!----></div>
                </div>
                <div class="no-Results p-6 text-center text-gray-500 text-lg italic" style="display: none;">No Results</div><!---->
                <table data-size="sm" tabindex="0" class="data-table" allow-column-picker="true"
                  column-preferences-key="forms.contact.columns">
                  <thead>
                    <tr>
                      <th class="checkbox-column"><label for="checkerOfAllBoxes"
                          class="flex items-center justify-center relative cursor-pointer"><input type="checkbox"
                            id="checkerOfAllBoxes" class="relative top-0"></label></th>
                      <th class="group current-column sortable-column"><span>Date</span><svg height="8" width="8"
                          viewBox="0 0 10 6.5"
                          class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc-opacity-100 pointer-events-none">
                          <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                        </svg></th>
                      <th class="group sortable-column"><span>Name</span><svg height="8" width="8" viewBox="0 0 10 6.5"
                          class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                          <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                        </svg></th>
                      <th class="group sortable-column"><span>Email</span><svg height="8" width="8" viewBox="0 0 10 6.5"
                          class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                          <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                        </svg></th><!---->
                      <th class="actions-column"></th>
                    </tr>
                  </thead>
                  <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                      <th class="checkbox-column"><input type="checkbox" id="checkbox-1668105792.0463"
                          value="1668105792.0463"></th>
                      <td class=""><a href="{{route('forms.view')}}"
                          class="text-blue">2022-11-10 18:43</a></td>
                      <td class="">
                        <div>
                          <div handle="name" values="[object Object]" class="text-index-field">Marty McFly</div>
                        </div>
                      </td>
                      <td class="">
                        <div>
                          <div handle="email" values="[object Object]" class="text-index-field">mcfly@gmail.com</div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <x-customDropdown :menuItems="$menuItems"/>
                      </th>
                    </tr>
                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                      <th class="checkbox-column"><input type="checkbox" id="checkbox-1668105730.3186"
                          value="1668105730.3186"></th>
                      <td class=""><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105730.3186"
                          class="text-blue">2022-11-10 18:42</a></td>
                      <td class="">
                        <div>
                          <div handle="name" values="[object Object]" class="text-index-field">Lorraine Baines McFly
                          </div>
                        </div>
                      </td>
                      <td class="">
                        <div>
                          <div handle="email" values="[object Object]" class="text-index-field">
                            lorraine.b.mcfly@yahoo.com</div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <x-customDropdown :menuItems="$menuItems"/>
                      </th>
                    </tr>
                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                      <th class="checkbox-column"><input type="checkbox" id="checkbox-1668105453.1997"
                          value="1668105453.1997"></th>
                      <td class=""><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105453.1997"
                          class="text-blue">2022-11-10 18:37</a></td>
                      <td class="">
                        <div>
                          <div handle="name" values="[object Object]" class="text-index-field">George McFly</div>
                        </div>
                      </td>
                      <td class="">
                        <div>
                          <div handle="email" values="[object Object]" class="text-index-field">plainvanilla@juno.com
                          </div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <x-customDropdown :menuItems="$menuItems"/>
                      </th>
                    </tr>
                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                      <th class="checkbox-column"><input type="checkbox" id="checkbox-1668105347.8293"
                          value="1668105347.8293"></th>
                      <td class=""><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105347.8293"
                          class="text-blue">2022-11-10 18:35</a></td>
                      <td class="">
                        <div>
                          <div handle="name" values="[object Object]" class="text-index-field">Dr. Emmett Brown</div>
                        </div>
                      </td>
                      <td class="">
                        <div>
                          <div handle="email" values="[object Object]" class="text-index-field">
                            docbrown@1.21jigawatts.biz</div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <x-customDropdown :menuItems="$menuItems"/>
                      </th>
                    </tr>
                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                      <th class="checkbox-column"><input type="checkbox" id="checkbox-1668105195.026"
                          value="1668105195.026"></th>
                      <td class=""><a href="https://demo.statamic.com/cp/forms/contact/submissions/1668105195.026"
                          class="text-blue">2022-11-10 18:33</a></td>
                      <td class="">
                        <div>
                          <div handle="name" values="[object Object]" class="text-index-field">Biff Tannen</div>
                        </div>
                      </td>
                      <td class="">
                        <div>
                          <div handle="email" values="[object Object]" class="text-index-field">biff@aol.com</div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <x-customDropdown :menuItems="$menuItems"/>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="w-full flex mt-6">
                <div class="flex flex-1 items-center">
                  <div class="text-xs text-gray-700"> 1-5 of 5 </div>
                </div><!---->
                <div class="flex flex-1">
                  <div class="flex-1"></div><!---->
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
