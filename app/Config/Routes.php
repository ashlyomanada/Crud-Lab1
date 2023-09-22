<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->post('/save', 'ProductController::save');
$routes->get('/delete/(:num)','ProductController::delete/$1');
$routes->get('/edit/(:num)','ProductController::edit/$1');
$routes->get('/add','ProductController::add');
