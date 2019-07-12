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
    return view('home');
})->name('home');

Route::get('/terms-and-policies', function () {
    return view('terms-and-policies');
})->name('terms-and-policies');

Route::get('/application/media', function () {
    return view('application/media');
})->name('media');

Route::get('/3dm-xr', function () {
    return view('get-the-app');
});
