<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// -> is the access operator. It accesses an object's value
// => The difference is that => is the assign operator that is used while creating an array.
