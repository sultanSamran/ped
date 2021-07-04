<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['namespace' => 'Admin' , 'middleware' => 'auth:admin' , 'prefix' => 'admin' ] , function(){
//     route::get('/' , 'AdminController@index');
//     // Route::get('/', function(){
//     //     return 'admin';
//     // });
   
// });

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin' ] , function(){
    Route::get('/' , 'DashboardController@index') ->name('admin.dashboard');
    Route::get('/student' , 'DashboardController@index1') ->name('admin.student');
   
   
});

Route::group(['namespace' => 'Admin' ,'middleware' => 'guest:admin'] , function(){
    Route::get('login' , 'LoginController@getLogin') ->name('admin.login');
    Route::post('login' , 'LoginController@postlogin') ->name('admin.post.login');

    
   
    
});

Route::get('/student' , 'Admin\DashboardController@index1') ->name('admin.student');
