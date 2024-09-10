<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'UserController::index');
$routes->get('/load-data', 'UserController::loadData');
$routes->get('/load-more-data', 'UserController::loadMoreData');
