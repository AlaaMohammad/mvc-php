<?php

require_once __DIR__.'/helpers/functions.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php';

$router = new Router();

$router->get('/products', 'ProductController@index', 'product.index');
$router->get('/products/{id}', 'ProductController@show', 'product.show');

$router->get('/users', 'UserController@index', 'user.list');
$router->get('/users/{id}', 'UserController@show', 'user.list');


$router->dispatch();














//require_once __DIR__.'/config/routerold.php';
//if($uri == '/internet-plans'){
//    require_once __DIR__.'/controllers/products.controller.php';
//}
//if($uri == '/'){
//    require_once __DIR__.'/controllers/home.controller.php';
//}
//if($uri == '/devices-and-accessories'){
//    require_once __DIR__.'/controllers/devices.controller.php';
//}else{
//    require_once __DIR__.'/views/pages/404.view.php';
//}

