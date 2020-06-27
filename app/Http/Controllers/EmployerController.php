<?php

namespace App\Http\Controllers;

use App\Internship;
use App\InternshipStudent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $applicants = $internship->applicants;

        foreach ($applicants as $applicant){
            $application = DB::table('internship_student')
                ->where('user_id', '=', $applicant->id)
                ->where('internship_id', '=', $internshipId)
                ->first();
            $applicant->application = $application;
        }

        return view('employer\showInternship')->with(array(
            'internship' => $internship,
            'applicants' => $applicants,
        ));
    }

    public function showStudent($studentId, $internshipId)
    {

        $student = User::find($studentId);
        $internship = Internship::find($internshipId);

        $application = DB::table('internship_student')
            ->where('user_id', '=', $studentId)
            ->where('internship_id', '=', $internshipId)
            ->first();

        return view('employer\showStudentProfile')->with(array(
            'internship' => $internship,
            'student' => $student,
            'application' => $application,
        ));
    }

    public function acceptStudent($studentId, $internshipId)
    {
        $application = InternshipStudent::where('user_id', '=', $studentId)
            ->where('internship_id', '=', $internshipId)
            ->first();

        $application->status = 'acceptat';
        $application->save();

        return redirect()->route('employerShowInternship', ['id' => $internshipId]);

    }

    public function rejectStudent($studentId, $internshipId)
    {
        $application = InternshipStudent::where('user_id', '=', $studentId)
            ->where('internship_id', '=', $internshipId)
            ->first();

        $application->status = 'respins';
        $application->save();

        return redirect()->route('employerShowInternship', ['id' => $internshipId]);

    }

    public function employerProfile()
    {

        $user = auth()->user();
        return View('employer/editProfile')->with(array(
            'user' => $user,
        ));
    }
}
