<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@verifyUserType')->name('home');

Route::get('/student-home', 'StudentController@index')->name('studentHome');
Route::get('/student-show-internship/{id}', 'StudentController@showInternship')->name('studentShowInternship');
Route::get('/student-apply/{id}', 'StudentController@applyForInternship')->name('studentApplyForInternship');
Route::get('/student-show-profile', 'StudentController@showProfile')->name('studentShowProfile');
Route::post('/student-edit-profile', 'StudentController@editProfile')->name('studentEditProfile');

Route::get('/employer-home', 'EmployerController@index')->name('employerHome');
Route::get('/employer-show-internship/{id}', 'EmployerController@showInternship')->name('employerShowInternship');
Route::get('/employer-show-student/{studentId}/from-internship/{internshipId}', 'EmployerController@showStudent')->name('employerShowStudent');
Route::get('/accept-student/{studentId}/at-internship/{internshipId}', 'EmployerController@acceptStudent')->name('acceptStudent');
Route::get('/reject-student/{studentId}/at-internship/{internshipId}', 'EmployerController@rejectStudent')->name('rejectStudent');
Route::get('/employer-show-profile', 'EmployerController@employerProfile')->name('employerShowProfile');


