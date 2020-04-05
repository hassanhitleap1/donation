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

Route::get('/', function () {
    return view('index');
});

Route::get('/corona', function () {
    return view('corona');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

Route::get('/description', function () {
    return view('description');
});
Route::get('/terms-conditions', function () {
    return view('terms_conditions');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
