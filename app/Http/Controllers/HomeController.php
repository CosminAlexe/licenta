<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $user = auth()->user();

        if($user->userType->type === 'Student');
        {
            $internships = Internship::all();
            return view('homeStudent')->with(array('internships' => $internships));
        }
    }
}
