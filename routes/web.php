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
    return view('welcome');
});

Route::get('account', 'AccountController@index');

Route::get('home', 'HomeController@index');

Route::get('manage', 'ManageController@index');

Route::get('manual', 'ManualController@index');

Route::get('page', 'PageController@index');

Route::get('social', 'SocialController@index');

Route::get('welcome', 'WelcomeController@index');

Route::get('admin', 'AdminController@index');

