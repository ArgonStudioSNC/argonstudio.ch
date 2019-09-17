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

Route::get('/', 'WebsiteController@home')->name('website.home');
Route::get('/terms-and-policies', 'WebsiteController@termsandpolicies')->name('website.terms-and-policies');
Route::get('/3dm-xr', 'WebsiteController@gettheapp')->name('website.gettheapp');
