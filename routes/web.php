<?php


Auth::routes();

// Route::get('/home', 'Home\HomeController@index')->name('home');
// ROTAS HOME
Route::get('/', 'Home\HomeController@index')->name('Home.index');
Route::get('/Painel', 'Painel\PainelController@index')->name('Painel.index');

// Route::group([
//     'prefix' => 'Painel',

// ], function(){
//     Route::resource('Licitacao', 'Painel\LicitacaoController')->name('Painel.Licitacao.index');
// });

// ROTAS LICITACAO
Route::get('/Painel/Licitacao','Painel\LicitacaoController@index')->name('Painel.Licitacao.index');
Route::get('/Painel/Licitacao/show/{id?}','Painel\LicitacaoController@show', $id = '')->name('Painel.Licitacao.show');
Route::delete('/Painel/Licitacao/destroy/{id?}','Painel\LicitacaoController@destroy', $id = '')->name('Painel.Licitacao.destroy');
Route::get('/Painel/Licitacao/create','Painel\LicitacaoController@create')->name('Painel.Licitacao.create');
Route::post('/Painel/Licitacao/store','Painel\LicitacaoController@store')->name('Painel.Licitacao.store');
Route::get('/Painel/Licitacao/edit/{id?}', 'Painel\LicitacaoController@edit', $id = '')->name('Painel.Licitacao.edit');
Route::post('/Painel/Licitacao/update/{id?}','Painel\LicitacaoController@update', $id = '')->name('Painel.Licitacao.update');

// ROTAS COMISSAO

Route::get('/Painel/Comissao','Painel\ComissaoController@index')->name('Painel.Comissao.index');
Route::get('/Painel/Comissao/show/{id?}','Painel\ComissaoController@show', $id = '')->name('Painel.Comissao.show');
Route::delete('/Painel/Comissao/destroy/{id?}','Painel\ComissaoController@destroy', $id = '')->name('Painel.Comissao.destroy');
Route::get('/Painel/Comissao/create','Painel\ComissaoController@create')->name('Painel.Comissao.create');
Route::post('/Painel/Comissao/store','Painel\ComissaoController@store')->name('Painel.Comissao.store');
Route::get('/Painel/Comissao/edit/{id?}', 'Painel\ComissaoController@edit', $id = '')->name('Painel.Comissao.edit');
Route::post('/Painel/Comissao/update/{id?}','Painel\ComissaoController@update', $id = '')->name('Painel.Comissao.update');

//ROTAS DE FORMAÇÃO DE COMISSÃO
Route::post('/Painel/FormacaoComissao','Painel\FormacaoComissaoController@index')->name('Painel.FormacaoComissao.index');
Route::post('/Painel/FormacaoComissao/store', 'Painel\FormacaoComissaoController@store')->name('Painel.FormacaoComissao.store');    
//ROTAS AJAX
Route::get('/Painel/FormacaoComissao/nome/{q?}','Painel\FormacaoComissaoController@retornarMembrosAjax', $q = '')->name('Painel.FormacaoMembro.buscarMembrosAjax');
// Route::get('/Painel/FormacaoComissao/MembrosAjax/{id_comissao?}','Painel\FormacaoComissaoController@retornarMembrosAjaxComissao', $id_comissao = '')->name('Painel.FormacaoMembro.buscarMembrosAjaxComissao');
Route::get('/Painel/FormacaoComissao/MembrosAjax/{id_comissao?}/elemento/{elemento?}/token/{token?}','Painel\FormacaoComissaoController@retornarMembrosAjaxComissao', ['id_comissao'=> $id_comissao = '','elemento'=> $elemento ='', 'token'=> $token='']);

// /Painel/FormacaoComissao/MembrosAjax/"+id+"/elemento/"+elemento,
