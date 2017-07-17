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
Route::auth();

Route::get('home', 'CarouselController@home');
Route::get('/test', 'CarouselController@test');
Route::get('/video-tutorial', 'VideoController@video');
Route::get('/', function () {
    return view('home');
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

/*admin controllers */

Route::get('/dashboard', function () {
    return view('admin/admin');
});
Route::get('/reviews', function () {
    return view('admin/reviews');
});
Route::get('/video', 'VideoController@index');
Route::post('upload/uploadFiles', 'CarouselController@multiple_upload');