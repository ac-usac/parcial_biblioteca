<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ==================== AUTORES ====================
$routes->get('autores','AutoresController::index'); 
$routes->post('agregar_autor','AutoresController::agregarAutor');
$routes->get('eliminar_autor/(:num)','AutoresController::eliminarAutor/$1');
$routes->get('buscar_autor/(:num)','AutoresController::buscarAutor/$1');
$routes->post('modificar_autor','AutoresController::modificarAutor');

// ==================== EDITORIALES ====================
$routes->get('editoriales','EditorialesController::index'); 
$routes->post('agregar_editorial','EditorialesController::agregarEditorial');
$routes->get('eliminar_editorial/(:num)','EditorialesController::eliminarEditorial/$1');
$routes->get('buscar_editorial/(:num)','EditorialesController::buscarEditorial/$1');
$routes->post('modificar_editorial','EditorialesController::modificarEditorial');

// ==================== LIBROS ====================
$routes->get('libros','LibrosController::index'); 
$routes->post('agregar_libro','LibrosController::agregarLibro');
$routes->get('eliminar_libro/(:num)','LibrosController::eliminarLibro/$1');
$routes->get('buscar_libro/(:num)','LibrosController::buscarLibro/$1');
$routes->post('modificar_libro','LibrosController::modificarLibro');

// ==================== PAISES ====================
$routes->get('paises','PaisesController::index'); 
$routes->post('agregar_pais','PaisesController::agregarPais');
$routes->get('eliminar_pais/(:num)','PaisesController::eliminarPais/$1');
$routes->get('buscar_pais/(:num)','PaisesController::buscarPais/$1');
$routes->post('modificar_pais','PaisesController::modificarPais');

// ==================== AUTORES_LIBROS ====================
// Nota: esta tabla es intermedia N:M, normalmente se gestiona con combos de selección
$routes->get('autores_libros','AutoresLibrosController::index'); 
$routes->post('agregar_autor_libro','AutoresLibrosController::agregarAutorLibro');
$routes->get('eliminar_autor_libro/(:num)/(:num)','AutoresLibrosController::eliminarAutorLibro/$1/$2'); 
$routes->get('buscar_autor_libro/(:num)/(:num)','AutoresLibrosController::buscarAutorLibro/$1/$2'); 
$routes->post('modificar_autor_libro','AutoresLibrosController::modificarAutorLibro');
