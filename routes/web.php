<?php

Auth::routes();
Route::get('/', 'FlowerController@index');
Route::get('/home', 'FlowerController@index')->name('home');
Route::get('flowers/create', 'FlowerController@create')->name('flowers.create');
Route::post('flowers/store', 'FlowerController@store')->name('flowers.store');


/*
Route::get('/', function () {
    return view('welcome');
});
*/