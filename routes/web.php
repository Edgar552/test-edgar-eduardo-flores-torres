<?php


Route::get('/','EmpresasController@index')->name('index');

Route::resource('empresas', 'EmpresasController')->parameters(['empresas'=>'id']);

Route::resource('contactos', 'ContactosController')->parameters(['contactos'=>'id']);