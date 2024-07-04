<?php

namespace Database\Seeders;

use App\Models\TaxonomyTerms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxonomyTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaxonomyTerms::create([
            'site' => 'default',
            'title' => "testinf taxonomies",
            'slug' => 'testinf-taxonomies',
            'uri' => '/taxonomy-checking/testinf-taxonomies',
            'taxonomy' => 'testinf-taxonomies',
            'data' => '{"content":"this is for testing tzxonomies","updated_by":1,"updated_at":1715082553}',
        ]);
    }
}
