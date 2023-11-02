<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', [AdminController::class, 'index']);
$routes->get('/admin/toko', [AdminController::class, 'toko']);
$routes->get('/admin/transaksi', [AdminController::class, 'transaksi']);
$routes->get('/admin/pengembalian', [AdminController::class, 'pengembalian']);