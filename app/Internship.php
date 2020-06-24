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
        'user_id',
        'city_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function applicants()
    {
        return $this->belongsToMany('App\User', 'internship_student');
    }
}
