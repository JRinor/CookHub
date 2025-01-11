<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'duration',
    ];

    protected $dates = [
        'date',
    ];

    public function getDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'workshop_user');
    }
}
