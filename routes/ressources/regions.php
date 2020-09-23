<?php
Route::middleware('auth')->group(function () {
// authentifié


    Route::group(['namespace' => 'Ressources'], function() {


        // views
        Route::group(['prefix' => 'regions'], function() {
            Route::view('/', 'ressources.region.index');
            Route::view('/create', 'ressources.region.create');
            Route::view('/{region}/edit', 'ressources.region.edit');
        });

        // api
        Route::group(['prefix' => 'api/regions'], function() {
            Route::get('index', 'RegionController@all');

            // Route::get('/getUserRoles/{user}', 'UserController@getUserRoles');
            Route::get('/count', 'RegionController@count');
            Route::post('/filter', 'RegionController@filter');

            // Route::get('/{user}', 'UserController@show')->middleware('permission:read-users');
            // Route::post('/store', 'UserController@store')->middleware('permission:create-users');
            // Route::put('/update/{user}', 'UserController@update')->middleware('permission:update-users');
            // Route::delete('/{user}', 'UserController@destroy')->middleware('permission:delete-users');
        });
    });

});
