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

//Home page
Route::get('/', 'HomeController@index')
    ->middleware('auth')
    ->name('index');

//Offer page
Route::get('/offer', 'OfferController@index')
    ->middleware('auth')
    ->name('offer');

//Account page
Route::get('/account', 'AccountController@index')
    ->middleware('auth')
    ->name('account');

//Send contact data
Route::post('/contact/send', 'ContactController@send')
    ->name('contact-send');




/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
| Authentication routes
|
*/

//Login
Route::post('/auth/login', 'AuthController@login')
    ->name('auth-login');

//Register
Route::post('/auth/register', 'AuthController@register')
    ->name('auth-register');

//Logout page
Route::get('/auth/logout', 'AuthController@logout')
    ->name('auth-logout');
