<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('api/muebles', 'Api\MueblesController::index');
$routes->get('api/muebles/(:num)', 'Api\MueblesController::show/$1');