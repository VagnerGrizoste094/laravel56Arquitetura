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
$this->match(['get', 'post'], '/', 'StaticPageController@getHome')->name('sair');
$this->match(['get', 'post'], 'create', 'StaticPageController@create')->name('create');

Route::group(['prefix' => 'admin'], function(){
    $this->resource('carousel', 'CarouselPageController');   
    $this->resource('textoSlide', 'TextoSlidePageController');
    $this->resource('sobre', 'SobrePageController');
    $this->resource('portfolio', 'PortfolioPageController');
    $this->resource('team', 'TeamPageController');
    $this->resource('rodape', 'RodapePageController');  
});

