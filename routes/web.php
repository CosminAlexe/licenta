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

Route::get('/employer-home', 'EmployerController@index')->name('employerHome');
Route::get('/employer-show-internship/{id}', 'EmployerController@showInternship')->name('employerShowInternship');



