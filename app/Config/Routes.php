<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index',['as' => 'dashboard','filter' => 'auth']);
$routes->get('/login', 'Auth::login',['as' => 'loginPage']);
$routes->post('/login', 'Auth::doLogin',['as' => 'doLogin']);
