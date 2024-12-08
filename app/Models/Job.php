<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';

    protected $fillable = [
        'job_code',
        'job_slug',
        'job_position',
        'job_address',
        'job_salary',
        'job_major',
        'job_description',
        'job_requirements',
        'job_type',
        'job_specialization',
        'status',
        
    ];

    protected $casts = [
        'job_requirements' => 'array'
    ];
}
