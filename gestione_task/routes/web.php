<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TaskController@index')->name('index');
