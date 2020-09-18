<?php
Route::middleware('auth')->group(function () {
// authentifié


    Route::group(['namespace' => 'Ressources'], function() {


        // views
        Route::group(['prefix' => 'communes'], function() {
            Route::view('/', 'ressources.commune.index');
            Route::view('/create', 'ressources.commune.create');
            Route::view('/{commune}/edit', 'ressources.commune.edit');
        });

        // api
        Route::group(['prefix' => 'api/communes'], function() {
            Route::get('index', 'communeController@index');

            // Route::get('/getUserRoles/{user}', 'UserController@getUserRoles');
            // Route::get('/count', 'UserController@count');
            // Route::post('/filter', 'UserController@filter')->middleware('permission:read-users');

            // Route::get('/{user}', 'UserController@show')->middleware('permission:read-users');
            // Route::post('/store', 'UserController@store')->middleware('permission:create-users');
            // Route::put('/update/{user}', 'UserController@update')->middleware('permission:update-users');
            // Route::delete('/{user}', 'UserController@destroy')->middleware('permission:delete-users');
        });
    });

});
