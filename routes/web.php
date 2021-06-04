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
    return view('welcome');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/team', function () {
    return view('layouts.team');
});
Route::get('/testimonials', function () {
    return view('layouts.testimonials');
});
Route::get('/services', function () {
    return view('layouts.services');
});
Route::get('/portfolio', function () {
    return view('layouts.portfolio');
});
Route::get('/pricing', function () {
    return view('layouts.pricing');
});
Route::get('/blog', function () {
    return view('layouts.blog');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
