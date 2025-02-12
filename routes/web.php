<?php

use Illuminate\Support\Facades\Route;

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
    return view('index',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/feature', function () {
    return view('feature',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/course', function () {
    return view('course',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/course-detail', function () {
    return view('detail',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/testimonial', function () {
    return view('testimonial',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/team', function () {
    return view('team',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Welcome",
        "subtitle" => "Bintang Private"
    ]);
});
