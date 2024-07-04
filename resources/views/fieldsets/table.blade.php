@extends('layouts.main')
@section('content')
  <title>Fieldsets table :: Cedar</title>
  <div class="page-wrapper max-w-xl">
          <div class="flex mb-6">
            <h1 class="flex-1">Fieldsets</h1> <a href="#"
              class="btn-primary">Create Fieldset</a>
          </div>
          <div class="mb-4">
            <div class="card overflow-hidden p-0 relative"
              visible-columns="[object Object],[object Object],[object Object]">
              <div class="overflow-x-auto overflow-y-hidden">
                <table data-size="sm" tabindex="0" class="data-table">
                  <thead>
                    <tr><!---->
                      <th class="group current-column"><span>Title</span><!----></th>
                      <th class="group"><span>Handle</span><!----></th>
                      <th class="group"><span>Fields</span><!----></th><!---->
                      <th class="actions-column"></th>
                    </tr>
                  </thead>
                  <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                      <td class=""><a href="#">new
                          fieldset</a></td>
                      <td width="25%" class=""><span class="font-mono text-xs">new_fieldset</span></td>
                      <td width="15%" class="">
                        <div>
                          <div handle="fields" values="[object Object]" class="">0</div>
                        </div>
                      </td><!---->
                      <th class="actions-column">
                        <div class="dropdown-list">
                          <div aria-haspopup="true"><button aria-label="Open Dropdown" class="rotating-dots-button"><svg
                                width="12" viewBox="0 0 24 24" class="rotating-dots fill-current">
                                <circle cx="3" cy="12" r="3"></circle>
                                <circle cx="12" cy="12" r="3"></circle>
                                <circle cx="21" cy="12" r="3"></circle>
                              </svg></button></div>
                          <div class="v-portal" style="display: none;"></div>
                        </div>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="flex justify-center text-center mt-16">
            <div class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700">Learn more about <a
                href="#" target="_blank" rel="noopener noopener"
                class="text-blue hover:text-blue-700">Fieldsets</a></div>
          </div>
        </div>
@endsection