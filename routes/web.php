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

use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::post('/follow/{user}', 'FollowController@store');

Route::get('/email', function (){
    return new \App\Mail\NewUserWelcomeMail();
});
Route::get('/', 'PostController@index');
Route::get("/p/create", "PostController@create");
Route::get('/p/{post}', "PostController@show");
Route::post("/p", "PostController@store");

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
