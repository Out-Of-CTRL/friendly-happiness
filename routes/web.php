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

Route::get('/testTemplate', function () {
    return view('testTemplate');
});

Route::get('/orar', function () {
    return view('orar');
});

Route::get('/admin', function () {
	if (Auth::user()->id == 1)
    return view('admin');
	else
	return view('home',['events' => App\Event::all(),'courses' => App\Course::all(),'grades' => App\Grades::all(), 'rooms' => App\Room::all(), 'mods' => App\Mods::all()]);
})->name('home');

Route::resource('group', 'GroupController');

Route::resource('course', 'CourseController');

Route::resource('room', 'RoomController');

Route::resource('event', 'EventController');

Route::resource('grade', 'GradeController');

Route::resource('mods', 'ModController');

Route::resource('news', 'NewController');

Route::resource('moduser', 'ModUserController');

Auth::routes();

Route::get('home', function () {
	if (Auth::user()->id == 1)
    return view('admin');
	else
    return view('home',['events' => App\Event::all(),'courses' => App\Course::all(),'grades' => App\Grades::all(), 'rooms' => App\Room::all(), 'mods' => App\Mods::all()]);
})->name('home');


Route::get('orar', function () {
    return view('orar',['events' => App\Event::all(),'courses' => App\Course::all(),'grades' => App\Grades::all(), 'rooms' => App\Room::all(), 'mods' => App\Mods::all()]);
})->name('orar');


Route::get('profil', function () {
    return view('profil',['events' => App\Event::all(),'courses' => App\Course::all(),'grades' => App\Grades::all(), 'rooms' => App\Room::all(), 'users' => App\User::all(), 'mods' => App\Mods::all()]);
})->name('profil');

Route::get('felicitari', 'FelicitariController@index')->name('felicitari');
