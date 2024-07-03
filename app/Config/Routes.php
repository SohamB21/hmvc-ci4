<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('site', 'SiteController::index');
$routes->get('students', 'SiteController::listStudents');
$routes->get('add-student', 'SiteController::insertStudent');
$routes->get('update-student', 'SiteController::updateStudent');
$routes->get('delete-student', 'SiteController::deleteStudent');
$routes->get('single-student', 'SiteController::readSpecificStudent');

