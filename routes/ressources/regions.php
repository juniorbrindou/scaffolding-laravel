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
            // Route::get('index', 'RegionController@all');

            // Route::get('/getUserRoles/{user}', 'UserController@getUserRoles');
            // Route::get('/count', 'RegionController@count');
            Route::post('/filter', 'RegionController@all');

            // Route::get('/{user}', 'RegionController@show')->middleware('permission:read-users');
            Route::post('/store', 'RegionController@store');
            // Route::put('/update/{user}', 'RegionController@update')->middleware('permission:update-users');
            // Route::delete('/{user}', 'RegionController@destroy')->middleware('permission:delete-users');
        });
    });

});
