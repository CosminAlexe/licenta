<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            foreach ($internships as $internship){
                $application = DB::table('internship_student')
                    ->where('user_id', '=', $user->id)
                    ->where('internship_id', '=', $internship->id)
                    ->first();
                $internship->application = $application;
            }

            $cities = City::all();
            $categories = Category::all();

            return view('student\homeStudent')->with(array(
                'internships' => $internships,
                'categories' => $categories,
                'cities' => $cities,
                'requestedCities' => null,
                'requestedCategories' => null,
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

    public function showProfile()
    {
        $user = auth()->user();

        $profile = $user->studentProfile;

        return view('student\editProfile')->with(array(
            'user' => $user,
            'profile' => $profile,
        ));
    }


    public function editProfile(Request $request)
    {
        $user = auth()->user();
        $profile = $user->studentProfile;

        $user->name = $request->get('name');
        $user->phone_number = $request->get('phone_number');
        $user->save();

        $profile->university = $request->get('university');
        $profile->faculty = $request->get('faculty');
        $profile->current_year = $request->get('current_year');
        $profile->about_you = $request->get('about_you');
        $profile->skills = $request->get('skills');
        $profile->projects = $request->get('projects');
        $profile->foreign_languages = $request->get('foreign_languages');
        $profile->experience = $request->get('experience');
        $profile->save();

        return redirect()->route('studentShowProfile');
    }

    public function filter(Request $request)
    {
        $user = auth()->user();

        if($user->userType->type === 'Student');
        {

            $cities = City::all();
            $categories = Category::all();

            if($request->input('cities')){
                $requestedCities = $request->input('cities');
                $requestedCitiesForQuery = $request->input('cities');

            }
            else{
                foreach ($cities as $city)
                {
                    $requestedCities = null;
                    $requestedCitiesForQuery[$city->id] = $city->id;
                }
            }

            if($request->input('categories')){
                $requestedCategories = $request->input('categories');
                $requestedCategoriesForQuery = $request->input('categories');
            }
            else{
                foreach ($categories as $category)
                {
                    $requestedCategories = null;
                    $requestedCategoriesForQuery[$category->id] = $category->id;
                }
            }

            $internships = Internship::whereIn('category_id', $requestedCategoriesForQuery)
                ->whereIn('city_id', $requestedCitiesForQuery)
                ->get();

            foreach ($internships as $internship){
                $application = DB::table('internship_student')
                    ->where('user_id', '=', $user->id)
                    ->where('internship_id', '=', $internship->id)
                    ->first();

                $internship->application = $application;
            }

            return view('student\homeStudent')->with(array(
                'internships' => $internships,
                'categories' => $categories,
                'cities' => $cities,
                'requestedCities' => $requestedCities,
                'requestedCategories' => $requestedCategories
            ));
        }
    }
}
