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
    ->name('index');

//Offer page
Route::get('/offer', 'HomeController@index')
    ->name('offer');

//Account page
Route::get('/account', 'HomeController@index')
    ->name('account');


//Send contact data
Route::post('/contact/send', 'ContactController@send')
        ->name('contact-send');