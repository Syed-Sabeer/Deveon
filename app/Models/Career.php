<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'job_type',
        'summary',
        'responsiblities',
        'location',
        'education',
        'experience',
        'salary_range',
        'visibility',
    ];

    protected $casts = [
        'visibility' => 'integer',
        'responsiblities' => 'array',
    ];
}

