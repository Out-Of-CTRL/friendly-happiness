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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/test', function () {
    return view('relationTest', ['users' => App\User::all()]);
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/orar', function () {
    return view('orar');
});

Route::resource('group', 'GroupController');

Route::resource('course', 'CourseController');

Route::resource('room', 'RoomController');

Route::resource('event', 'EventController');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
