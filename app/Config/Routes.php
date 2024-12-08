<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dataDiri', 'Home::DataDiri');
$routes->get('/welcome_message', 'Home::index');
