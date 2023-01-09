<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'post_id'
    ];

    /**
     * Dostan autoraa commentu
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');

    }

    /**
     * Dostan post commentu
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
