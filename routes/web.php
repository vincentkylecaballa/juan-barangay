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

Route::get('/eventcalendar', function () {
    return view('eventcalendar');
});

Route::view('/register',"register");
Route::post('/store',"UserController@store");

Route::view('/login',"login");
Route::post('/logs',"UserController@logs");



Route::resource('/population','PopulationController');
Route::resource('/brgyofficers','BrgyOfficialController');
Route::resource('/eventcalendar','CalendarEventController');
Route::resource('/home','HomeController');




Route::get('displaydata','CalendarEventController@show');
Route::get('/addeventurl','CalendarEventController@display');
Route::get('deleteevent','CalendarEventController@show');




Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calendar');


