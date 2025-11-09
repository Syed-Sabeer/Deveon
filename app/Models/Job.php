<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'linkedin_url',
        'current_job_place',
        'current_job_position',
        'current_salary',
        'yearofexperince',
        'applied_for',
        'expected_salary',
        'resume_file',
        'covering_letter',
    ];
}


