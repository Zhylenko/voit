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
    ->middleware('challenge.exists')
    ->middleware('challenge.passed')
    ->name('index');

//Offer page
Route::get('/offer', 'OfferController@index')
    ->middleware('auth')
    ->name('offer');

//Account page
Route::get('/account', 'AccountController@index')
    ->middleware('auth')
    ->middleware('challenge.passed')
    ->name('account');

//Send contact data
Route::post('/contact/send', 'ContactController@send')
    ->name('contact-send');


/*
|--------------------------------------------------------------------------
| Challenges
|--------------------------------------------------------------------------
|
| Challenges routes
|
*/

//Get question
Route::match(['post', 'get'], '/challenge/get', 'ChallengeController@get')
    ->middleware('auth')
    ->middleware('challenge.auth')
    ->middleware('challenge.exists')
    ->middleware('challenge.passed')
    ->name('challenge-get');


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


/*
|--------------------------------------------------------------------------
| Courses
|--------------------------------------------------------------------------
|
| Courses routes
|
*/

//Course payment
Route::get('/course/payment', 'CourseController@payment')
    ->middleware('auth')
    ->name('course-payment');

//Course send
Route::post('/course/handle', 'CourseController@handle')
    ->name('course-handle');
