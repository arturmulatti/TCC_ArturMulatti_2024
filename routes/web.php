<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\BookController@index');
Route::get('/teste', 'App\Http\Controllers\BookController@create');
Route::get('/login', 'App\Http\Controllers\ValidacaoController@index');
Route::get('/requestComentario','App\Http\Controllers\ComentarioController@index');