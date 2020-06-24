<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        if($user->userType->type === 'Student');
        {
            $internships = Internship::all();
            $cities = City::all();
            $categories = Category::all();
            return view('student\homeStudent')->with(array(
                'internships' => $internships,
                'categories' => $categories,
                'cities' => $cities,
            ));
        }
    }

    public function showInternship($internshipId)
    {

        $user = auth()->user();

        $application = DB::table('internship_student')
            ->where('user_id', '=', $user->id)
            ->where('internship_id', '=', $internshipId)
            ->first();


        $internship = Internship::find($internshipId);

        return view('student\showInternship')->with(array(
           'internship' => $internship,
            'application' => $application,
        ));
    }

    public function applyForInternship($internshipId)
    {
        $user = auth()->user();

        $application = DB::table('internship_student')
            ->where('user_id', '=', $user->id)
            ->where('internship_id', '=', $internshipId)
            ->first();

        if($application)
        {
            return redirect()->route('studentHome');
        }
        else
        {
            DB::insert('insert into internship_student (user_id, internship_id, status) values(?, ?, ?)', [$user->id, $internshipId, 'in asteptare']);
            return redirect()->route('studentShowInternship',  $internshipId);
        }

    }
}
