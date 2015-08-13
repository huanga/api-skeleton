<?php
use League\Route\RouteCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/../vendor/autoload.php';

$router = new RouteCollection();

$routes = include(__DIR__ . '/routes.php');
foreach($routes as $route) {
    $router->addRoute($route[0],$route[1],$route[2],$route[3]);
}

$dispatcher = $router->getDispatcher();

$request = Request::createFromGlobals();

try {
    $response = $dispatcher
        ->dispatch(
            $request->getMethod(),
            $request->getPathInfo()
        );
} catch(Exception $e) {
    $response = new Response();
    $response->headers->set('Content-Type', 'application/json');
    $response->setContent(
        json_encode(
            [
                'error' => $e->getMessage(),
                'trace' => $e->getTrace()
            ]
        )
    );
}

$response->send();