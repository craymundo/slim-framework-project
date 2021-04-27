<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Routing\RouteCollectorProxy;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->group('/api', function(RouteCollectorProxy $group){
    $group->post('/customer/getDataCustomer', 'App\Controllers\CustomerController:getDataCustomer' );
    $group->get('/menu/getAll', 'App\Controllers\MenuController:getAll' );
    $group->get('/operation/report', 'App\Controllers\OperationController:report' );
    $group->post('/operation/add', 'App\Controllers\OperationController:add' );
    $group->post('/user/login', 'App\Controllers\UserController:login' );
});


 
?>