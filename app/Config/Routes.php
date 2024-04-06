<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/book_table', 'Home::book_table');
//$routes->post('/submit_booking', 'Home::submit_booking'); 
$routes->post('/book_table/submit_booking', 'Home::submit_booking');
$routes->get('/menu', 'Home::menu');
$routes->get('/blog', 'Home::blog');
$routes->get('/testimonials', 'Home::testimonials');
$routes->get('/contact', 'Home::contact');
$routes->post('/contact', 'Home::contact');
$routes->get('/blog_details', 'Home::blog_details');
$routes->get('/special_offer', 'Home::special_offer');
