<?php

require 'vendor/autoload.php';

// Routing
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new \League\Route\RouteCollection();

$router->addRoute('GET', '/', 'Example\Controller\RecipesController::index');
$router->addRoute('GET', '/view/{id}', 'Example\Controller\RecipesController::view');
$router->addRoute('GET', '/add', 'Example\Controller\RecipesController::add');
$router->addRoute('GET', '/edit/{id}', 'Example\Controller\RecipesController::edit');

$dispatcher = $router->getDispatcher();
$request = Request::createFromGlobals();

$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

$response->send();
