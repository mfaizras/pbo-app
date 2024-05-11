<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index',['as' => 'dashboard','filter' => 'auth']);
$routes->get('/login', 'Auth::login',['as' => 'loginPage']);
$routes->post('/login', 'Auth::doLogin',['as' => 'doLogin']);
$routes->get('logout', 'Auth::logout',['as' => 'doLogout']);


$routes->group('post',['filter' => 'auth'],  static function ($routes) {
    $routes->get('/', 'PostController::index',['as' => 'allPost']);
    $routes->get('add', 'PostController::create',['as' => 'addPost']);
    $routes->post('add', 'PostController::store',['as' => 'storePost']);
    $routes->get('(:num)', 'PostController::show/$1',['as' => 'showPost']);
    $routes->get('category/(:num)', 'PostController::byCategory/$1',['as' => 'showCategory']);
    $routes->get('subject/(:num)', 'PostController::bySubject/$1',['as' => 'postBySubject']);
});

$routes->group('admin',['filter' => 'auth'],static function($routes){
    $routes->get('/','AdminController::index',['as' => 'admin']);
    $routes->get('subject','AdminController::subject',['as' => 'adminSubject']);
    $routes->post('subject','AdminController::subjectStore',['as' => 'adminSubjectStore']);
    $routes->get('lecture','AdminController::lecture',['as' => 'adminLecture']);
    $routes->post('lecture','AdminController::lectureStore',['as' => 'adminLectureStore']);
    $routes->get('category','AdminController::category',['as' => 'adminCategory']);
    $routes->post('category','AdminController::categoryStore',['as' => 'adminCategoryStore']);
    $routes->get('user','AdminUser::index',['as' => 'adminUser']);
    $routes->get('user/add','AdminUser::create',['as' => 'adminUserAdd']);
    $routes->post('user/add','AdminUser::store',['as' => 'adminUserStore']);
    $routes->get('user/delete/(:num)','AdminUser::delete/$1',['as' => 'adminUserDelete']);
    $routes->get('user/edit/(:num)','AdminUser::edit/$1',['as' => 'adminUserEdit']);
    $routes->post('user/edit/(:num)','AdminUser::update/$1',['as' => 'adminUserUpdate']);
});