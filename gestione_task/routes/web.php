<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TaskController@index')->name('index');
Route::get('/edit/{id}', 'TaskController@edit')->name('edit');
