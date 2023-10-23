<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');

$routes->get('Anggota', 'AnggotaController::index');
$routes->get('/anggota/form/', 'AnggotaController::form');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/create/', 'AnggotaController::create');
$routes->post('/anggota/hapus/', 'AnggotaController::hapus');
$routes->post('/anggota/login/', 'AnggotaController::ceklogin');

$routes->get('Pengguna', 'PenggunController::index');
$routes->get('/pengguna/form/', 'PenggunController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunController::edit/$1');
$routes->post('/pengguna/create/', 'PenggunController::create');
$routes->post('/pengguna/hapus/', 'PenggunaController::hapus');





$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::ceklogin');
$routes->get('/logout', 'LoginController::logout');