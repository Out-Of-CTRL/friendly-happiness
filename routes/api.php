<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/group', function (Request $request) {
    return $request->group();
});

Route::middleware('auth:api')->get('/course', function (Request $request) {
    return $request->course();
});

Route::middleware('auth:api')->get('/room', function (Request $request) {
    return $request->room();
});

Route::middleware('auth:api')->get('/event', function (Request $request) {
    return $request->event();
});

Route::middleware('auth:api')->get('/grade', function (Request $request) {
    return $request->grade();
});

Route::middleware('auth:api')->get('/mod', function (Request $request) {
    return $request->mod();
});

Route::middleware('auth:api')->get('/new', function (Request $request) {
    return $request->new();
});