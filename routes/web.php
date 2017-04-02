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

Route::resource('grade', 'GradeController');

Auth::routes();

Route::get('home', function () {
    return view('home', ['events' => App\Event::all()], ['rooms' => App\Room::all()]);
}, 'EventController@index', 'RoomController')->name('home');

Route::get('felicitari', 'FelicitariController@index')->name('felicitari');
