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
Route::get('/', 'StaticPageController@getHome');

Route::get('admin', [
    'as' => 'admin.home', 'uses' => 'AdminPageController@index'
]);
Route::post('admin', [
    'as' => 'admin.editarHome', 'uses' => 'AdminPageController@editarHome'
]);
Route::post('admin/carousel', [
    'as' => 'admin.uploadImg', 'uses' => 'AdminPageController@uploadImg'
]);
Route::post('admin/textoslide', [
    'as' => 'admin.textoSlide', 'uses' => 'AdminPageController@textoSlide'
]);
Route::post('/', 'StaticPageController@getHome')->name('sair');
Route::get('admin/carousel', 'AdminPageController@create')->name('carousel');
Route::get('admin/textoslide', 'AdminPageController@index')->name('textoslide');
Route::get('admin/sobre', 'AdminPageController@index')->name('sobre');
Route::get('admin/portfolio', 'AdminPageController@index')->name('portfolio');
Route::get('admin/team', 'AdminPageController@index')->name('team');
Route::get('admin/rodape', 'AdminPageController@index')->name('rodape');



