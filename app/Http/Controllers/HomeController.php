<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Internship;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verifyUserType()
    {
        $user = auth()->user();


        if($user->userType->type === 'Student')
        {
            return redirect()->route('studentHome');
        }

        if($user->userType->type === 'Employer')
        {
            return redirect()->route('employerHome');
        }

    }
}
