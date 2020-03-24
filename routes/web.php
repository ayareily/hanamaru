<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('home');
Route::get('articles.create', 'ArticleController@create')->name('articles.create');
Route::post('articles.store', 'ArticleController@store')->name('articles.store');


/*
Route::get('/', function () {
    return view('welcome');
});
*/