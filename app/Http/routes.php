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

Route::get('/', 'CarouselController@home');
Route::get('/test', 'CarouselController@test');
Route::get('/video-tutorial', 'VideoController@video');
Route::get('/testimonial', 'ReviewsController@review');

Route::get('/project', function () {
    return view('project');
});
Route::get('/service', function () {
    return view('services');
});

/*admin controllers */
Route::get('/dashboard', function () {
    return view('admin/admin');
});
Route::get('/projects', 'CarouselController@index');
Route::get('/reviews', 'ReviewsController@index');
Route::get('/video', 'VideoController@index');
Route::post('upload/uploadFiles', 'CarouselController@multiple_upload');
Route::post('upload/video', 'VideoController@video_name');