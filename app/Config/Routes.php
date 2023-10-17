<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'User::login');
$routes->get('/login/esqueceu-senha', 'User::esqueceuSenha');
$routes->add('user/verificarlogin', 'User::verificarLogin');
$routes->add('user/logout', 'User::logout');
