<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('registro', 'RegistroController@register');
Route::get('ver', 'RegistroController@ver');
Route::post('registrar', 'RegistroController@registrar')->name('registrar');



Route::middleware(['switchDB'])->group(function () {
    Route::resource('doctor', 'DoctorController');
    Route::resource('patient', 'PatientController');
    Route::resource('quote', 'QuoteController');
});

// DB_CONNECTION=couchdb
// DB_HOST=45.77.193.128
// DB_PORT=5984
// DB_DATABASE=clinica
// DB_USERNAME=admin
// DB_PASSWORD=Vpn1234.*

// DB_CONNECTION2=couchdb2
// DB_HOST2=45.77.72.213
// DB_PORT2=5984
// DB_DATABASE2=clinica
// DB_USERNAME2=admin
// DB_PASSWORD2=Vpn1234.*