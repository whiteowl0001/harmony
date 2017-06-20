<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/video-tutorial', function () {
    return view('video-tutorial');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});