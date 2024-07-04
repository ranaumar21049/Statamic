<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxonomies extends Model
{
    use HasFactory;

    public function collections()
    {
        return $this->belongsToMany(Collections::class, 'collection_taxonomy');
    }

    public function terms()
    {
        return $this->hasMany(TaxonomyTerms::class, 'taxonomy', 'handle');
    }
}
