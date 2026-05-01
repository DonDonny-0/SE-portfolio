<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = 
    [
        'image', 
        'title',
        'description',
        'tech_stack',
        'github_url',
        'live_url',
        'slug',
    ];

    // public function technologies() : HasMany 
    // {
    //     return $this.hasMany(Technology::class);
    // }
}
