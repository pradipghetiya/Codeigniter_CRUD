<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pradip', 'PradipController::index');
$routes->post('/userData',"PradipController::saveData");
$routes->get('/pradip/view', 'PradipController::getData');

$routes->get('/pradip/edit/(:num)', 'PradipController::edit/$1');
$routes->post('/pradip/update/(:num)', 'PradipController::update/$1');

$routes->get('/pradip/delete/(:num)', 'PradipController::delete/$1');
