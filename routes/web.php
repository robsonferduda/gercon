<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('boletins', 'BoletimController@index');
Route::get('boletim/publicacao/atualizar/{id}','BoletimController@atualizar');

Route::get('paginas', 'PaginaController@index');

Route::resource('boletim', 'BoletimController');
Route::resource('evento', 'EventoController');
Route::resource('galeria', 'GaleriaController');
Route::resource('noticia', 'NoticiaController');