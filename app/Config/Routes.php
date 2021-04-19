<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/inicio', 'Inicio::inicio');
$routes->post('/iniciar_sesion', 'Login::iniciar_sesion');
$routes->get('/login', 'Inicio::login');
$routes->get('/perfil', 'Perfil::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/contacto', 'Contacto::index');
$routes->get('/inicio', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/login', 'Login::iniciar_sesion');
$routes->get('/adopciones', 'Mascotas::index');
$routes->get('/adopciones2', 'Mascotas::viewMascota');
$routes->get('/salir', 'Login::salir');
$routes->get('/', 'Inicio::inicio');
$routes->get('/blog', 'Blog::index');
$routes->get('/single2', 'Blog::single2');
$routes->get('/single', 'Blog::single');
$routes->get('/single3', 'Blog::single3');
$routes->get('/bloga', 'Blog::bloga');
$routes->get('/blogsa1', 'Blog::blogsa1');
$routes->get('/blogsa2', 'Blog::blogsa2');
$routes->get('/blogsa3', 'Blog::blogsa3');
$routes->get('/blogc', 'Blog::blogc');
$routes->get('/blogc1', 'Blog::blogc1');
$routes->get('/blogc2', 'Blog::blogc2');
$routes->get('/blogc3', 'Blog::blogc3');
$routes->get('/blogad', 'Blog::blogad');
$routes->get('/blogad1', 'Blog::blogad1');
$routes->get('/blogad2', 'Blog::blogad2');
$routes->get('/blogad3', 'Blog::blogad3');
$routes->get('/buscar', 'Mascota::buscar');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
