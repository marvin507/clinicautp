<?php




Route::get('/', 'HomeController@index')->name('home');

Route::get('registro', 'RegistroController@register');
Route::get('ver', 'RegistroController@ver');
Route::post('registrar', 'RegistroController@registrar')->name('registrar');

// DB_CONNECTION=couchdb
// DB_HOST=45.77.193.128
// DB_PORT=5984
// DB_DATABASE=clinica
// DB_USERNAME=admin
// DB_PASSWORD=Vpn1234.*