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
Route::get('create', 'AuthController@createacc');

Route::post('create', 'AuthController@store');

Route::get('signin', 'AuthController@signin');

/* Property Listings & Individual Properties */
Route::get('submit', 'PropertyController@submit');

Route::get('property-detail', 'PropertyController@propertydetail');

/* Three different views to browse properties. Add button for swapping between them. */
Route::get('list-lines', 'PropertyController@listlines');

Route::get('list-grid', 'PropertyController@listgrid');

Route::get('list-masonry', 'PropertyController@listmasonry');
