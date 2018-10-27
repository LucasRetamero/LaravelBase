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

Route::group(['prefix'=>'produto','namespace'=>'Painel'],function(){
Route::get('/','ProdutoController@index')->name('produto.lista');
Route::get('/add','ProdutoController@Adicionar')->name('produto.cadastrar.form');
Route::post('/cadastrar','ProdutoController@Add')->name('produto.cadastrar');
Route::get('/atualizar/{id}','ProdutoController@Att')->name('produto.atualizar');
Route::post('/atualizar/att','ProdutoController@Atualizar')->name('produto.att');
Route::get('/deletarform/{id}','ProdutoController@DeletarForm')->name('produto.deletar.form');
Route::post('/deletar',"ProdutoController@Deletando")->name('produto.deletando');
});

Route::group(['namespace'=>'Site'],function(){
Route::get('/categoria','SiteController@CategoriaIndex');
Route::get('/contato','SiteController@ContatoIndex');
});

Route::get('/','Site\SiteController@Index');
