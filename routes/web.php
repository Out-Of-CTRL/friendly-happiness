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

Route::resource('group', 'GroupController');

Route::resource('course', 'CourseController');

Route::resource('room', 'RoomController');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
