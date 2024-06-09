<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Todos::index');
$routes->resource('todos', ['placeholder' => '(:num)']);