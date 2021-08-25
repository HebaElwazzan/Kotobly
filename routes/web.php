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

Route::get('/', 'App\Http\Controllers\UserController@home');
Route::get('/homepage.html', 'App\Http\Controllers\UserController@home');
Route::get('/login.html', 'App\Http\Controllers\UserController@login');
Route::get('/about.html', 'App\Http\Controllers\UserController@about');
Route::get('/contact.html', 'App\Http\Controllers\UserController@contact');
Route::get('/register.html', 'App\Http\Controllers\UserController@register');
Route::get('/feed.html', 'App\Http\Controllers\UserController@feed');
Route::get('/feed.html/{id}', 'App\Http\Controllers\UserController@feedid');
Route::post('/register.html', 'App\Http\Controllers\UserController@store');
Route::post('/login.html', 'App\Http\Controllers\UserController@check');
Route::get('/profile.html', 'App\Http\Controllers\UserController@profile');
Route::post('/profile.html', 'App\Http\Controllers\CarsController@store');
Route::get('/profile.html/{id}', 'App\Http\Controllers\UserController@profileid');
