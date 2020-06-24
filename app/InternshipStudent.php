<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipStudent extends Model
{
    protected $fillable = [
      'user_id',
      'internship_id',
      'status',
    ];

    protected $table = 'internship_student';
}
