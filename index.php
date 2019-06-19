<?php 
use Bramus\Router\Router;
require __DIR__ . '/vendor/autoload.php';

$router =new Router;

$router->get('/hello', function(){
    echo "hello world";
});

$router->get('/articles', function () {
    echo "liste des articles";
});

$router->get('/articles/{id}', function ($id) {
    echo "voici l'article " . $id;
});

$router->run();