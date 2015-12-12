<?php

$router = app\RouterSingleton::getInstance();

$router->map('GET', '/', function () {
    require __DIR__ . '/src/views/home.php';
});

$router->map('GET', '/pessoas', 'controller\PessoaController::index');

$router->map('GET', '/pessoas1', function () {

    if(count($_GET)>0) {
        foreach($_GET as $key => $get) {
            $params[$key] = $get;
            echo $get;
        }
    }

});
