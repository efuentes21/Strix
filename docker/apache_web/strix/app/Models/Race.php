<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'unevenness',
        'map',
        'max_competitors',
        'distance',
        'date',
        'time',
        'start',
        'promotion',
        'sponsorship',
        'inscription',
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'timestamp',
    ];
}
