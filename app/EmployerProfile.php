<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'about_you',
        'website',
        'facebook_page_link',
    ];
}
