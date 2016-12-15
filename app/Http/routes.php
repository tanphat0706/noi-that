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

        /**
         * User router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'user'
        ], function () {
            Route::get('/', [
                'as' => 'users-list',
                'uses' => 'UserController@index'
            ]);

            // Ajax for datatables
            Route::get('/getUsersJson', [
                'as' => 'json-users-list',
                'uses' => 'UserController@getUsersJson'
            ]);

            Route::get('/create', [
                'as' => 'create-user',
                'uses' => 'UserController@create'
            ]);

            Route::post('/store', [
                'as' => 'store-user',
                'uses' => 'UserController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'edit-user',
                'uses' => 'UserController@edit'
            ]);

            Route::post('/update/{id}', [
                'as' => 'update-user',
                'uses' => 'UserController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'delete-user',
                'uses' => 'UserController@destroy'
            ]);
            Route::get('/profile', [
                'as' => 'profile',
                'uses' => 'UserController@profile'
            ]);

            Route::post('/updateProfile', [
                'as' => 'update-profile',
                'uses' => 'UserController@updateProfile'
            ]);
        });
        /**
         * User Group router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'user-group'
        ], function () {
            Route::get('/', [
                'as' => 'user-group-list',
                'uses' => 'UserGroupController@index'
            ]);

            // Ajax for datatables
            Route::get('/getUserGroupsJson ', [
                'as' => 'json-user-group-list',
                'uses' => 'UserGroupController@getUserGroupsJson'
            ]);

            Route::get('/create', [
                'as' => 'create-user-group',
                'uses' => 'UserGroupController@create'
            ]);

            Route::post('/store', [
                'as' => 'store-user-group',
                'uses' => 'UserGroupController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'edit-user-group',
                'uses' => 'UserGroupController@edit'
            ]);

            Route::post('/update/{id}', [
                'as' => 'update-user-group',
                'uses' => 'UserGroupController@update'
            ]);

            Route::post('/delete/{id}', [
                'as' => 'delete-user-group',
                'uses' => 'UserGroupController@destroy'
            ]);
        });

        /**
         * Category router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'category'
        ], function () {
            Route::get('/list', [
                'as' => 'category-list',
                'uses' => 'CategoryController@index'
            ]);
            // Ajax for datatables
            Route::get('/getCategoriesJson', [
                'as' => 'json-categories-list',
                'uses' => 'CategoryController@getCategoriesJson'
            ]);
            Route::get('/create', [
                'as' => 'category-create',
                'uses' => 'CategoryController@create'
            ]);
            Route::post('/store', [
                'as' => 'category-store',
                'uses' => 'CategoryController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'category-edit',
                'uses' => 'CategoryController@edit'
            ]);

            Route::put('/update/{id}', [
                'as' => 'category-update',
                'uses' => 'CategoryController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'category-del',
                'uses' => 'CategoryController@destroy'
            ]);
        });
    });
});