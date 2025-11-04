<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // ...existing code...
    protected $fillable = [
        'company',
        'position',
        'description',
        'start_date',
        'end_date',
        'is_current',
        'technologies',
        'location'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'technologies' => 'array'
    ];
}