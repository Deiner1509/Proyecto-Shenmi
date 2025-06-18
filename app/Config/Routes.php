<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/detalles', 'Productos::show');
$routes->get('/compra/(:num)','Productos::show2/$1');
$routes->get('/compras/(:alpha)/(:num)','Productos::cat/$1/$2'); 
$routes->get('/empleados', 'Empleados::index');
$routes->get('/empleados/nuevo', 'Empleados::crear');
$routes->post('/empleados/guardar', 'Empleados::guardar');
$routes->get('/empleados/editar/(:num)','Empleados::actualizar/$1');
$routes->get('/empleados/eliminar/(:num)','Empleados::eliminar/$1');
$routes->post('/empleados/actualizar/(:num)', 'Empleados::actualizar/$1');
$routes->post('/login/acceder', 'Login::acceder');
$routes->get('/login', 'Login::index');
$routes->get('/secretaria', 'Empleados::secretaria');
$routes->get('/vendedor', 'Empleados::vendedor');
$routes->get('/logout', 'Login::salir');
