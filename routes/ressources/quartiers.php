<?php
Route::middleware('auth')->group(function () {
// authentifié


    Route::group(['namespace' => 'Ressources'], function() {


        // views
        Route::group(['prefix' => 'quartiers'], function() {
            Route::view('/', 'ressources.quartier.index');
            Route::view('/create', 'ressources.quartier.create');
            Route::view('/{quartier}/edit', 'ressources.quartier.edit');
        });

        // api
        Route::group(['prefix' => 'api/quartiers'], function() {
            Route::get('index', 'quartierController@index');

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
