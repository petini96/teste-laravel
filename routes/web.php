<?php


Auth::routes();

// Route::get('/home', 'Home\HomeController@index')->name('home');

Route::get('/', 'Home\HomeController@index')->name('Home.index');
Route::get('/Painel', 'Painel\PainelController@index')->name('Painel.index');