<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'ingredients',
        'steps',
        'image',
        'average_rating',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
