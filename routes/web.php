<?php

use App\Mail\Trustuk;
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
    Route::get('/deposit', ['uses' => 'AuthController@depositIndex'])->middleware('auth');
    Route::get('/details', ['uses' => 'AuthController@detailsIndex'])->middleware('auth');
    Route::get('/logout', ['uses' => 'AuthController@logout']);

    Route::post('/login', ['uses' => 'AuthController@login']);
    Route::post('/register', ['uses' => 'AuthController@register']);
    Route::post('/deposit', ['uses' => 'AuthController@deposit']);
    Route::post('/details', ['uses' => 'AuthController@details']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', ['uses' => 'AdminController@index', 'middleware' => 'auth']);
    Route::get('/deposit', ['uses' => 'AdminController@showDeposit']);
    Route::get('/profile', ['uses' => 'AdminController@profile']);
    Route::get('/proof', ['uses' => 'AdminController@proof']);

    Route::post('/proof', ['uses' => 'AdminController@addProof']);
    Route::post('/deposit', ['uses' => 'AuthController@deposit']);
    Route::post('/profile', ['uses' => 'AdminController@storeProfile']);
});

Route::get('/super', ['uses' => 'AdminController@super']);
Route::get('/super/proof', ['uses' => 'AdminController@showProof']);
Route::get('/super/users', ['uses' => 'AdminController@users']);
Route::get('/super/{id}', ['uses' => 'AdminController@details']);

Route::get('images/{image}', function($image = null) {
    $path = storage_path(). '/proof/'. $image;
    if(file_exists($path)) {
        return response()->file($path);
    }
});

//For Internt Payment Notification
Route::get('/notify', ['uses' => 'IPNController@INDEX']);
