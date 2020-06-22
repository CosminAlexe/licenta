<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'description',
        'start_date',
        'end_date',
        'salary',
        'user_id'
    ];
}
