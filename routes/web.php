<?php

use App\Models\Student;
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
Route::get('/', function(){
    return view('layouts.admin');
});

Route::get('student/grades' , 'TestController@getStudentGrades');
Route::get('student/index' , 'TestController@index')->name('student.index');
Route::get('import' , 'TestController@index');
Route::post('student/import' , 'TestController@import')->name('student.import');

Route::get('/testlayouts', function(){
    return view('layouts.admin');
});

Route::get('/find/{id}/student', function($id){
    $grade = Student::find($id)->exam;

    return $grade;
});