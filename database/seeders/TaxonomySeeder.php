<?php

namespace Database\Seeders;

use App\Models\Taxonomies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Taxonomies::create([
            'handle' => 'testinf-taxonomies',
            'title' => 'Tessting taxonomies',
            'settings' => '{"title":"testinf taxonomies","content":"this is for testing tzxonomies","updated_by":1,"updated_at":1715082553,"blueprint":"taxonomy_checking"}',
        ]);
    }
}
