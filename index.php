<?php

require 'vendor/autoload.php';

// Routing
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new \League\Route\RouteCollection();

$router->addRoute('GET', '/', function(Request $request, Response $response) {
    $response->setContent('Home.');
    return $response;
});

$dispatcher = $router->getDispatcher();
$request = Request::createFromGlobals();

$response = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

$response->send();
