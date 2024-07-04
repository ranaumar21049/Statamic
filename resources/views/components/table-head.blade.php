<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
@props(['columns'])

<thead>
    <tr>
        @foreach ($columns as $index => $column)
            <th
                class="group {{ $index === 0 ? 'current-column' : 'sortable-column rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8' }}">
                <span>{{ $column['name'] }}</span>
                <svg height="8" width="8" viewBox="0 0 10 6.5"
                    class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                    <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                </svg>
            </th>
        @endforeach
        <th></th>
    </tr>
</thead>
