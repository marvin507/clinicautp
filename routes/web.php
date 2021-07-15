<?php




Route::get('/', 'HomeController@index')->name('home');

Route::get('registro', 'RegistroController@register');
Route::get('ver', 'RegistroController@ver');
Route::post('registrar', 'RegistroController@registrar')->name('registrar');
