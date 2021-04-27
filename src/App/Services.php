<?php 

use App\Services\CustomerService;
use App\Services\MenuService;
use App\Services\OperationService;
use App\Services\UserService;
use Psr\Container\ContainerInterface;


use App\Handler\ApiError;

$container->set('customerService',function(ContainerInterface $container){
    return new CustomerService($container->get('customerModel'));
});

$container->set('menuService',function(ContainerInterface $container){
    return new MenuService($container->get('menuModel'));
});

$container->set('operationService',function(ContainerInterface $container){
    return new OperationService($container->get('operationModel'));
});

$container->set('userService',function(ContainerInterface $container){
    return new UserService($container->get('userModel'));
});


/* 
$container->set('errorHandler',function(ContainerInterface $container){
    return function ($request, $response, $exception) use ($container) {
        // print_r(get_class_methods($exception));
        $message = $exception->getMessage();
        $code = $exception->getCode();

        $data = [
            "status" => $code,
            "message" => $message
        ];
        $payload = json_encode($data);
        $response->getBody()->write($payload);

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($code);
    };
}); */