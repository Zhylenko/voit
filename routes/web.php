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
Route::get('/offer', 'OfferController@index')
    ->name('offer');

//Account page
Route::get('/account', 'AccountController@index')
    ->name('account');

//Send contact data
Route::post('/contact/send', 'ContactController@send')
        ->name('contact-send');

//Account page
Route::get('/logout', 'HomeController@index')
    ->name('account-logout');
