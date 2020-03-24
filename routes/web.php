<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('home');


/*
Route::get('/', function () {
    return view('welcome');
});
*/