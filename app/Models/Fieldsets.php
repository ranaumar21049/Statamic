<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fieldsets extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'handle',
        // Add other fillable fields here if any
    ];
}
