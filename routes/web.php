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
    return view('/auth/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/overview', 'HomeController@showOverview');
Route::get('/reports', 'HomeController@showReport');


Route::resource('courses', 'CourseController');
Route::resource('courses_by_semester', 'CourseBySemesterController');

Route::get('/index', 'PagesController@index'); // localhost:8000/
Route::post('/uploadFile', 'PagesController@uploadFile');
Route::get('report', 'CourseController@report');
Route::get('process_class_report', 'CourseController@process_class_report');
Route::get('process_semester_report', 'CourseController@process_semester_report');
Route::get('overview', 'CourseBySemesterController@overview');
