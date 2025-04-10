<?php 
require_once './core/Request.php';
require_once './app/controllers/MainController.php';
require_once './core/Route.php';
require_once './routes/web.php';

use Core\Route;

$request = new Request();
$routes = Route::getRoutes();
$url = $request->getUrl();
$request->validate($routes, $url);

