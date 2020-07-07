<?php


Route::auth();

Route::get('/', 'VehiclesController@index');

Route::group(['prefix' => 'api/v1'], function()

{
    Route::resource('vehicle', 'VehiclesController');

    Route::resource('owner', 'OwnersController');

}

);