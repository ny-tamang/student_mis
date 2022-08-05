<?php

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

// Route::get('student_index',function(){
//     return view('student.index');
// });

// Route::get('student_create', function(){
//     return view('student.create');
// });

// Route::get('/home',function(){
//     return view('home');
// });

//Route::post('student', 'StudentController@store')-> name('student.store');

//Route::get('student' ,'StudentController@index')->name('student.index');


Route::resource('students', 'StudentController');
Route::resource('batchs', 'BatchController');
Route::resource('faculties', 'FacultyController');
Route::resource('semesters', 'SemesterController');
Route::resource('educationinfos', 'EducationInfoController');
Route::resource('collegeinfos', 'CollegeInfoController');
Route::resource('parentinfos', 'ParentInfoController');


Route::group(['middleware'=>['auth']],function(){
    Route::resource('students', 'StudentController');
  
    Route::get('/home', 'HomeController@index')->name('home');
 
});
