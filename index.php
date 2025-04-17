<?php 
require_once './core/Request.php';
require_once './core/Route.php';
require_once './core/utils.php';
require_once './app/controllers/MainController.php';
require_once './core/App.php';
require_once './routes/web.php';

use Core\Route;

$request = new Request();
App::assets($request->getPublicUrl());
$routes = Route::getRoutes();
$url = $request->getUrl();
$request->validate($routes, $url);

