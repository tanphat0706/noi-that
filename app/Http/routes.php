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

Route::get('/', function () {
    return view('frontend.home');
});
Route::match([
    'get',
    'post'
], '/', [
    'as' => 'frontend',
    'uses' => 'HomeController@index'
]);
Route::get('/login', [
    'as' => 'login',
    'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('/login', [
    'as' => 'login',
    'uses' => 'Auth\AuthController@postLogin'
]);
// Route::auth();

Route::get('/home', 'HomeController@index');

Route::group([
    'middleware' => ['web'],
    'prefix' => 'admin'
], function () {
    Route::auth();

    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('/', [
            'as' => 'admin',
            'uses' => 'HomeController@admin'
        ]);
    });
});