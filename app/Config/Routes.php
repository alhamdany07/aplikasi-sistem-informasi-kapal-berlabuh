<?php

namespace Config;

use CodeIgniter\Routing\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // ubah ke true jika ingin otomatis mendeteksi controller

/*
 * --------------------------------------------------------------------
 * Default Route
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Auth Routes (Login & Logout)
 * --------------------------------------------------------------------
 */
$routes->get('/login', 'Auth::login');
$routes->post('/auth', 'Auth::auth');
$routes->get('/logout', 'Auth::logout');

/*
 * --------------------------------------------------------------------
 * Dashboard Routes (Admin)
 * --------------------------------------------------------------------
 */
$routes->get('/dashboard', 'Dashboard::index');

/*
 * --------------------------------------------------------------------
 * Kapal Routes (Admin)
 * --------------------------------------------------------------------
 * Semua route yang berhubungan dengan data kapal
 */
$routes->get('/kapal', 'Kapal::index'); // Menampilkan semua kapal
$routes->get('/kapal/tiba', 'Kapal::tiba');
$routes->get('/kapal/berangkat', 'Kapal::berangkat');
$routes->get('/kapal/tambah', 'Kapal::tambah');
$routes->post('/kapal/simpan', 'Kapal::simpan');
$routes->get('/kapal/edit/(:num)', 'Kapal::edit/$1');
$routes->post('/kapal/update/(:num)', 'Kapal::update/$1');
$routes->get('/kapal/hapus/(:num)', 'Kapal::hapus/$1');

/*
 * --------------------------------------------------------------------
 * User Routes (Halaman Pengunjung)
 * --------------------------------------------------------------------
 * Halaman publik tanpa login
 */
$routes->get('/user', 'UserController::index');
$routes->get('/user/kapal_tiba', 'UserController::kapalTiba');
$routes->get('/user/kapal_berangkat', 'UserController::kapalBerangkat');

/*
 * --------------------------------------------------------------------
 * Testing Route
 * --------------------------------------------------------------------
 */
$routes->get('/test', function () {
    echo "Routing berfungsi dengan baik 🚀";
});
