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
Route::group(['namespace'=>'Site'],function(){

Route::get('/categoria','SiteController@CategoriaIndex');
Route::get('/contato','SiteController@ContatoIndex');
});
Route::get('/','Site\SiteController@Index');
