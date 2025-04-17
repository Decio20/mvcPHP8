<?php 
use Core\Route;

Route::get('/', "MainController@index");

Route::get('/api/{id}', function($route){

    return $route['id'];
});

Route::get('/api/{id}', "ProductoController@show");

Route::get('/persona/{id}', "MainController@show");

Route::group('/producto', function(){

    Route::get('/id', function (){

        return view("index");
    });

    Route::get('/nombre/{name}', function ($route){

        return view("producto.index", ["name"=>$route['name']]);
    });
});


