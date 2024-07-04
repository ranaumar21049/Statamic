<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collections;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'title' => 'Posts',
                'handle' => 'posts',
            ],
            [
                'title' => 'Pages',
                'handle' => 'pages',
            ],
            [
                'title' => 'News Articles',
                'handle' => 'news-articles',
            ],
        ];
        Collections::insert($collections);
    }
}
