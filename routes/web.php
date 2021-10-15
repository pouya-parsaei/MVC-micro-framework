<?php

use App\Core\Routing\Route;
use App\Middleware\BlockIE;
use App\Middleware\BlockChrome;
use App\Middleware\BlockFirefox;

Route::get('/','HomeController@index');
Route::get('/panel','PanelController@index',[PanelController::class]);
Route::get('/post/{slug}','PostController@single');
Route::get('/post/{slug}/comment/{cid}','PostController@comment');
Route::get('/product/{name}/reviews','ProductController@reviews');
// Route::get('/todo/list','TodoController@list',[BlockFirefox::class,BlockIE::class]);
Route::get('/blockchrome','TodoController@list',[BlockChrome::class]);


Route::add(['post','ge
t'],'/a',function(){
    echo 'welcome';
});

Route::get('/b',function(){
    view('archive.articles');
});
Route::get('/c',function(){
    echo 'from get /c';
});
Route::get('/d',function(){
    echo 'from get /d';
});

