<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Rute untuk home
$routes->get('/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::attemptLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::attemptRegister');
$routes->get('/pengurus', 'Pengurus::index');
$routes->post('/pengurus/createPengumuman', 'Pengurus::createPengumuman');
$routes->get('/pengurus/editPengumuman/(:num)', 'Pengurus::editPengumuman/$1');
$routes->post('/pengurus/updatePengumuman/(:num)', 'Pengurus::updatePengumuman/$1');
$routes->get('/pengurus/deletePengumuman/(:num)', 'Pengurus::deletePengumuman/$1');
$routes->get('/pengurus/usersWarga', 'Pengurus::usersWarga');
$routes->get('/pengurus/editUser/(:num)', 'Pengurus::editUser/$1');
$routes->post('/pengurus/updateUser/(:num)', 'Pengurus::updateUser/$1');
$routes->get('/pengurus/deleteUser/(:num)', 'Pengurus::deleteUser/$1');
$routes->get('/pengurus/laporanWarga', 'Pengurus::laporanWarga');
$routes->get('/warga', 'Dashboard::warga');
$routes->post('/warga/createLaporan', 'Warga::createLaporan'); // Rute untuk membuat laporan oleh warga
$routes->get('/dashboard', 'Dashboard::index'); // Default dashboard
$routes->get('/auth/logout', 'Auth::logout'); // Rute untuk logout
