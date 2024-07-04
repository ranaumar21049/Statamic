<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;
    protected $fillable = [
        'handle',
        'title',
        'settings'
    ];


    public function entries()
    {
        return $this->hasMany(Entries::class, 'collection', 'handle');
    }

    public function taxonomies()
    {
        return $this->belongsToMany(Taxonomies::class, 'collection_taxonomies', 'collection_handle', 'taxonomy_handle', 'handle', 'handle');
    }
}
