<?php

namespace App\Http\Controllers;

use App\Internship;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        $internships = $user->internships;
        return view('employer\homeEmployer')->with(array(
            'internships' => $internships,
        ));

    }

    public function showInternship($internshipId)
    {

        $internship = Internship::find($internshipId);

        return view('employer\showInternship')->with(array(
            'internship' => $internship,
        ));
    }
}
