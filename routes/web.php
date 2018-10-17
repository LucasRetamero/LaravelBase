<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'Painel'],function(){
Route::get('/produto','ProdutoController@index')->name('produto.lista');
Route::get('/produto/save','ProdutoController@Salvando');
Route::get('/produto/att','ProdutoController@Atualizando');
Route::get('/produto/del','ProdutoController@Deletando');
Route::get('/produto/add','ProdutoController@Adicionar');
Route::post('/produto/cadastrar','ProdutoController@Add')->name('produto.cadastrar');
});

Route::group(['namespace'=>'Site'],function(){
Route::get('/categoria','SiteController@CategoriaIndex');
Route::get('/contato','SiteController@ContatoIndex');
});

Route::get('/','Site\SiteController@Index');
