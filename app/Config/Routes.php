<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index'); // base url, voláme metodu z Main
$routes->get('druha-stranka', 'Main::druhaStranka');
$routes->get('treti-stranka', 'Main::tretiStranka');
$routes->get('ctvrta-stranka', 'Main::ctvrtaStranka');
