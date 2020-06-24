<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $fillable = [
        'user_id',
        'faculty',
        'current_year',
        'skills',
        'foreign_languages',
        'experience',
        'projects',
    ];


}
