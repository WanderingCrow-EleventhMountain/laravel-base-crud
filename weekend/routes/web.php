<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'RospettiController@index') -> name('home');
Route::get('/rospo/{id}', 'RospettiController@show') ->name('show');
Route::get('/edit/{id}', 'RospettiController@edit') -> name('edit');
Route::post('/update/{id}', 'RospettiController@update') ->name('update');
Route::get('/delete/{id}', 'RospettiController@delete') ->name('delete');
Route::get('/create', 'RospettiController@create') ->name('create');
Route::post('/store', 'RospettiController@store') ->name('store');
