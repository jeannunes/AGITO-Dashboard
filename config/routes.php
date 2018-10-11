<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('api', function (RouteBuilder $routes) {
    $routes->setExtensions(['json', 'xml']);
    $routes->connect('/', ['controller' => 'Api', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/register', ['controller' => 'Users', 'action' => 'register']);
    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('public_api', function (RouteBuilder $routes) {
    $routes->setExtensions(['json', 'xml']);
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);
});

Router::prefix('dashboard', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Monitors', 'action' => 'login']);
    $routes->connect('/forgot-password', ['controller' => 'Monitors', 'action' => 'forgotPassword']);
    $routes->connect('/register', ['controller' => 'Monitors', 'action' => 'add']);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'view', 'index']);
    $routes->connect('/recover-password/**', ['prefix' => 'dashboard', 'controller' => 'Users', 'action' => 'recoverPassword'], ['_name' => 'recover_password']);
    $routes->connect('/*', ['controller' => 'Pages', 'action' => 'view']);
    $routes->fallbacks(DashedRoute::class);
});