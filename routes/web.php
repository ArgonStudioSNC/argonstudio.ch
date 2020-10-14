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
Route::get('/terms-of-services-development', 'WebsiteController@termsofservicesdevelopment')->name('website.terms-of-services-development');
Route::get('/privacy-policy-apps', 'WebsiteController@privacypolicyapps')->name('website.privacy-policy-apps');
Route::get('/3dm-xr', 'WebsiteController@get3dmapp')->name('website.get3dmapp');
Route::get('/app', 'WebsiteController@app')->name('website.app');

Route::view('/gerama', 'gerama');
