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
    return view('dashboard');
});
Route::get('/about', function () {
    return view('layouts.about');
})->name('layouts.about');
Route::get('/ablog-single', function () {
    return view('layouts.blog-single');
})->name('layouts.blog-single');
Route::get('/blog', function () {
    return view('layouts.blog');
})->name('layouts.blog');
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('layouts.contact');
Route::get('/portfolio', function () {
    return view('layouts.portfolio');
})->name('layouts.portfolio');
Route::get('/pricing', function () {
    return view('layouts.pricing');
})->name('layouts.pricing');
Route::get('/services', function () {
    return view('layouts.services');
})->name('layouts.services');
Route::get('/team', function () {
    return view('layouts.team');
})->name('layouts.team');
Route::get('/testimonials', function () {
    return view('layouts.testimonials');
})->name('layouts.testimonials');
