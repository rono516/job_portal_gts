<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [

        'job_title',
        'job_region',
        'job_type',
        'vacancies',
        'experience',
        'salary',
        'gender',
        'application_deadline',
        'job_description',
        'education_experience',
        'benefits',

    ];
}
