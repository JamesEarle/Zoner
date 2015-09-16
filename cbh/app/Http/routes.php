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

/* Static page routes */
Route::get('/', 'PagesController@welcome');

Route::get('contact','PagesController@contact');

Route::get('about','PagesController@about');

/* Authentication Routes */
Route::get('create', 'PagesController@createacc');

Route::get('signin', 'PagesController@signin');

/* Property Listings & Individual Properties */
Route::get('property-detail', 'PagesController@propertydetail');


