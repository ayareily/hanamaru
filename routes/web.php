<?php

Auth::routes();

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->name('show');
    Route::get('/{name}/followings', 'UserController@followings')->name('followings');
    Route::get('/{name}/followers', 'UserController@followers')->name('followers');
    });

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser');
});

Route::get('/', 'FlowerController@index');
Route::get('/home', 'FlowerController@index')->name('home');
Route::get('flowers/create', 'FlowerController@create')->name('flowers.create');
Route::post('flowers/store', 'FlowerController@store')->name('flowers.store');
Route::patch('flowers/{flower}', 'FlowerController@update')->name('flowers.update');
Route::get('flowers/{flower}', 'FlowerController@edit')->name('flowers.edit');
Route::delete('flowers/{flower}', 'FlowerController@destroy')->name('flowers.destroy');


/*
Route::get('/', function () {
    return view('welcome');
});
*/