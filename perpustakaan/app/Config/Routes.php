<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/buku', 'BukuController::index');
$routes->get('/buku/form', 'BukuController::form');
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->post('/buku/create', 'BukuController::create');
$routes->post('/buku/hapus', 'BukuController::hapus');


$routes->get('/KoleksiBuku', 'KoleksiBukuController::index');
$routes->get('/KoleksiBuku/form', 'KoleksiBukuController::form');
$routes->get('/KoleksiBuku/edit/(:num)', 'KoleksiBukuController::edit/$1');
$routes->post('/KoleksiBuku/create', 'KoleksiBukuController::create');
$routes->post('/KoleksiBuku/hapus', 'KoleksiBukuController::hapus');