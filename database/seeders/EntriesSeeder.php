<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entries;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entries::create([
            'site' => 'default',
            'status' => 'published',
            'date' => '2024-05-03 12:14:28',
            'title' => 'Checking Slug',
            'slug' => 'checking-slug',
            'collection' => 'posts',
            'data' => '{"content":"this is just for checking","author":"user1","updated_by":1}',
        ]);
    }
}
