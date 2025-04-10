<?php 
use Core\Route;

Route::get('/', "MainController@index");

Route::get('/api/{id}', function($route){

    return $route['id'];
});

Route::get('/api/{id}', "ProductoController@show");

Route::get('/persona/{id}', "MainController@show");

Route::group('/producto', function(){

    Route::get('/id', "producto id tipo GET");
    Route::get('/nombre/{name}', "producto id tipo GET");
});


