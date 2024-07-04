<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SidebarContent;

class SidebarSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $baseUrl = url('/');

    $sidebar = [
      [
        'parent' => '',
        'name' => 'Dashboard',
        'url' => $baseUrl . '/dashboard',
        'svg' => '<svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <circle cx="7" cy="8.5" r="3.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M7 5v3.5h3.5M9 22.5a6.979 6.979 0 0 0 1.5-4m4.5 4a6.979 6.979 0 0 1-1.5-4m-6.001 4h9M.5 15.5h23">
                    </path>
                    <rect width="23" height="17" x=".5" y="1.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" rx="1" ry="1"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M13.5 7 15 5l3 2.5 2.5-3m-1 8V11m-2 1.5v-2m-2 2v-3m-2 3V11"></path>
                  </svg>',
      ],
      [
        'parent' => 'Content',
        'name' => 'Collection',
        'url' => $baseUrl . '/collections',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9">
                    </path>
                  </svg>',
      ],
      [
        'parent' => 'Content',
        'name' => 'Navigation',
        'url' => $baseUrl . '/navigations',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M2.505 9.499v2.5m0 2.5v2.5m0-11.499v1a1 1 0 0 0 1 1h1m-2 12v1a1 1 0 0 0 1 1h1M7 7.499h3m-3 14h3m-7.495-21v2.5M20.5 9.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a2.782 2.782 0 0 1 1.707.707l1.586 1.586A2.782 2.782 0 0 1 20.5 4.5z">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M17 .569V3a1 1 0 0 0 1 1h2.429m.071 18.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3.114a2.139 2.139 0 0 1 1.513.627l1.666 1.666A2.782 2.782 0 0 1 20.5 17.5z">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M17 13.536V16a1 1 0 0 0 1 1h2.43"></path>
                  </svg>',
      ],
      [
        'parent' => 'Content',
        'name' => 'Taxonomies',
        'url' => $baseUrl . '/taxonomies',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M23.03 14.545a.552.552 0 0 1-.249 1l-5.544 1.692-1.693 5.543a.551.551 0 0 1-1 .249L1.452 9.938a2.789 2.789 0 0 1-.708-1.707L.738 1.737a1 1 0 0 1 1-1h6.491a2.782 2.782 0 0 1 1.707.707z">
                    </path>
                    <circle cx="5.737" cy="5.737" r="2" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                  </svg>',
      ],
      [
        'parent' => 'Content',
        'name' => 'Assets',
        'url' => $baseUrl . '/assets',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="m15.543 15.543-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 0 0-1.155.089l-2.486 4.142">
                    </path>
                    <rect width="17" height="17" x="1.543" y="1.543" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" rx="1" ry="1"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="m20.551 7.424 1 .091a1 1 0 0 1 .901 1.085l-1.181 12.948a1 1 0 0 1-1.087.9L6.243 21.18m-4.7-5.637h17">
                    </path>
                    <circle cx="6.043" cy="6.043" r="1.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                  </svg>',
      ],
      [
        'parent' => 'Content',
        'name' => 'Globals',
        'url' => $baseUrl . '/globals',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="11.985" r="11.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M.673 9.985h6.084a3 3 0 0 1 2.122.878L10 11.984a3 3 0 0 1 .121 4.115l-1.363 1.533A3 3 0 0 0 8 19.625v3.145M20.261 3.985h-5.8a2.25 2.25 0 0 0 0 4.5h.432a3 3 0 0 1 2.5 1.335l2.218 3.329a3 3 0 0 0 2.5 1.336h1.121">
                    </path>
                  </svg>',
      ],
      [
        'parent' => 'Fields',
        'name' => 'Fieldsets',
        'url' => $baseUrl . '/fieldsets',
        'svg' => '<svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.48 23.68">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M11.63 19.58H1.56A1.05 1.05 0 0 1 .5 18.52v-17A1.05 1.05 0 0 1 1.56.5h15.9a1.05 1.05 0 0 1 1.06 1.06v10.57">
                    </path>
                    <rect width="13.78" height="5.3" x="2.62" y="2.62" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" rx=".53"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M2.62 10.57v6.36a.53.53 0 0 0 .53.53h6.72a.53.53 0 0 0 .53-.53.68.68 0 0 0 0-.14l-1.84-6.36a.53.53 0 0 0-.51-.43h-4.9a.53.53 0 0 0-.53.57Zm13.78 6.89v-6.89a.53.53 0 0 0-.53-.53h-4.06a.53.53 0 0 0-.53.53.39.39 0 0 0 0 .15l1.92 6.74h3.2m4.6-.28v3a3 3 0 0 1-3 3h-3m4-4 2-2 2 2">
                    </path>
                  </svg>',
      ],
      [
        'parent' => 'Tools',
        'name' => 'Forms',
        'url' => $baseUrl . '/forms',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 14.5v-13a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1v13m19 8a1 1 0 0 1-1 1h-21a1 1 0 0 1-1-1v-6h7v1a2.006 2.006 0 0 0 2 2h5a2.006 2.006 0 0 0 2-2v-1h7zm-23-6 4-6m15 0 4 6m-15-13h1.997m.003 3h5m-7 3h7m-7 3h7">
                    </path>
                  </svg>',
      ],
      [
        'parent' => 'Tools',
        'name' => 'Updates',
        'url' => $baseUrl . '/updates',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M23.5 19.5a2 2 0 0 1-2 2h-19a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h19a2 2 0 0 1 2 2zM.5 8.498h23">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M3.5 15A2.5 2.5 0 0 1 6 12.5h12a2.5 2.5 0 0 1 0 5H6A2.5 2.5 0 0 1 3.5 15zm2.041 2.455 4.957-4.957m-.5 5 5-5m-10.5-9v5m4-5v5">
                    </path>
                  </svg>',
      ],
      [
        'parent' => 'Tools',
        'name' => 'Utilities',
        'url' => $baseUrl . '/utilities',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z"></path>
                      <path
                        d="M11.121 4.38A3 3 0 1 1 6.88 8.622a3 3 0 0 1 4.24-4.242m6.501 11a3 3 0 1 1-4.242 4.242 3 3 0 0 1 4.242-4.242M12.5 17.5h-9m17 0h-2M12 6.5h8.5m-17 0H6">
                      </path>
                      <path
                        d="M9 6.251a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25m6.5 11a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25">
                      </path>
                    </g>
                  </svg>',
      ],
      [
        'parent' => 'Users',
        'name' => 'Users',
        'url' => $baseUrl . '/users',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M20.5 13.5v-8h-9.442A1.67 1.67 0 0 1 9.5 4.56 1.738 1.738 0 0 0 7.9 3.5H4a.5.5 0 0 0-.5.5v9.5m15-10h-6.456a1.739 1.739 0 0 1-1.574-1 1.741 1.741 0 0 0-1.57-1H5.5m-5 14 .839-4.2a1 1 0 0 1 .981-.8H3.5m20 5-.839-4.2a1 1 0 0 0-.981-.8H20.5">
                    </path>
                    <circle cx="12" cy="9.25" r="1.75" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M15.5 14.5a3.612 3.612 0 0 0-7 0zm3 1a1.5 1.5 0 0 0-1.5 1.54 1.512 1.512 0 0 1-1.559 1.46H8.558A1.512 1.512 0 0 1 7 17.04a1.5 1.5 0 0 0-1.5-1.54h-5v6a1 1 0 0 0 1 1h21a1 1 0 0 0 1-1v-6z">
                    </path>
                  </svg>',
      ],
    ];
    SidebarContent::insert($sidebar);
  }
}
