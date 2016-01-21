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

/* Login to administrative session. CBH Admins only. */
Route::get('admin', 'AdminController@login');
Route::post('admin', 'AdminController@doLogin');

Route::get('/admin/main', 'AdminController@main');

Route::get('/admin/users', 'AdminController@users');

Route::get('/admin/users/detail/{uid}', 'AdminController@userdetail');

Route::get('/admin/properties', 'AdminController@properties');

/* Static page routes */
Route::get('/', 'PagesController@welcome');

Route::get('contact','PagesController@contact');
Route::post('contact', 'PagesController@mail');

Route::get('about','PagesController@about');

/* Authentication Routes */
Route::get('create', 'AuthController@createacc');
Route::post('create', 'AuthController@store');

Route::get('signin', 'AuthController@signin');
Route::post('signin', 'AuthController@doSignin');

Route::get('logout', 'AuthController@doLogout');

/* Submit your own property, or view the submit form. */
Route::get('submit', 'PropertyController@submit');
Route::post('submit', 'PropertyController@store');
Route::post('delete-property', 'PropertyController@delete');

// View a property, given it's ID, or contact that property's landlord.
Route::get('detail/{id}', 'PropertyController@propertydetail');
Route::post('contact-landlord', 'PropertyController@contactlandlord');

// Lines list view. There are also "Masonry" and "Grid" views in the Zoner template
Route::get('list-lines', 'PropertyController@listlines');
Route::post('list-lines', 'PropertyController@listspecified');
