<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'query'], function () {
    Route::post('/store', 'QueryController@store')->name('query.store');

    Route::get('/existing', 'ExistingQueryController@index');
});
