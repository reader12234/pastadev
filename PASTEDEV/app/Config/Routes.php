<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Register', 'Register::index');
$routes->get('Login', 'Login::index');
$routes->get('User/create', 'User::create');
$routes->post('User/store', 'User::store');
$routes->get('listuser', 'User::list');
$routes->get('user/delete/(:num)', 'User::delete/$1');
$routes->get('user/edit/(:num)', 'User::edit/$1');
$routes->post('user/edit/(:num)', 'User::update/$1'); 