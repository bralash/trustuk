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

Route::get('/', ['uses' => 'PagesController@index']);
Route::get('/about', ['uses' => 'PagesController@about']);
Route::get('/services', ['uses' => 'PagesController@services']);
Route::get('/faq', ['uses' => 'PagesController@faq']);
Route::get('/contact', ['uses' => 'PagesController@contact']);

Route::group(['prefix' => 'auth'], function() {
    Route::get('/login', ['uses' => 'AuthController@loginIndex']);
    Route::get('/register', ['uses' => 'AuthController@registerIndex']);
    Route::get('/deposit', ['uses' => 'AuthController@depositIndex']);

    Route::post('/register', ['uses' => 'AuthController@register']);
    Route::post('/deposit', ['uses' => 'AuthController@deposit']);
});