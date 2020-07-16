<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $fillable = [
        'user_id',
        'faculty',
        'university',
        'current_year',
        'skills',
        'about_you',
        'foreign_languages',
        'experience',
        'projects',
    ];


}
