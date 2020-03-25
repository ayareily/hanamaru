<?php

Auth::routes();
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