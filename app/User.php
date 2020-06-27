<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'picture',
        'password',
        'user_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function internships()
    {
        return $this->hasMany('App\Internship');
    }

    public function appliedInternships()
    {
        return $this->belongsToMany('App\Internships', 'internship_student');
    }

    public function userType()
    {
        return $this->belongsTo('App\UserType');
    }

    public function studentProfile()
    {
        return $this->hasOne('App\StudentProfile');
    }


}
