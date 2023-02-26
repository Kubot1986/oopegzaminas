<?php

use Rytis\Oopex\Framework\DiContainer;
use Rytis\Oopex\Framework\Router;

require_once './vendor/autoload.php';

// Load custom DI container.
$container = new DiContainer();
$container->loadDependencies();

// Use custom Router.
$requestUri = str_replace('/oopex', '', $_SERVER['REQUEST_URI']);
$router = $container->get(Router::class);
$router->process($requestUri, $_POST);