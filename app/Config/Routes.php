<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index',['as' => 'dashboard','filter' => 'auth']);
$routes->get('/login', 'Auth::login',['as' => 'loginPage']);
$routes->post('/login', 'Auth::doLogin',['as' => 'doLogin']);


$routes->group('post',['filter' => 'auth'],  static function ($routes) {
    $routes->get('/', 'PostController::index',['as' => 'allPost']);
    $routes->get('add', 'PostController::create',['as' => 'addPost']);
    $routes->post('add', 'PostController::store',['as' => 'storePost']);
    $routes->get('(:num)', 'PostController::show/$1',['as' => 'showPost']);
    $routes->get('category/(:num)', 'PostController::byCategory/$1',['as' => 'showCategory']);
    $routes->get('subject/(:num)', 'PostController::bySubject/$1',['as' => 'postBySubject']);
});

$routes->group('admin',['filter' => 'auth'],static function($routes){
    $routes->get('subject','AdminController::subject',['as' => 'adminSubject']);
});