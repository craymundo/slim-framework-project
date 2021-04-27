<?php 
use App\Models\CustomerModel;
use App\Models\MenuModel;
use App\Models\OperationModel;
use App\Models\UserModel;
use Psr\Container\ContainerInterface;

$container->set('customerModel',function(ContainerInterface $container){
    return new CustomerModel($container->get('db'));
});

$container->set('menuModel',function(ContainerInterface $container){
    return new MenuModel($container->get('db'));
});

$container->set('operationModel',function(ContainerInterface $container){
    return new OperationModel($container->get('db'));
});

$container->set('userModel',function(ContainerInterface $container){
    return new UserModel($container->get('db'));
});