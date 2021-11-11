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
    return view('website');
});

Route::get('/login', function () {
    return view('Login');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/brgyofficers', function () {
    return view('brgyofficers');
});

Route::get('/population', function () {
    return view('population');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::resource('population','PopulationController');

Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calendar');


