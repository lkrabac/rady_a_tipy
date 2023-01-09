<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    /**
     * Dostan autora postu
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Dostan commenty postu
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
