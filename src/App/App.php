<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$aux = new \DI\Container();
AppFactory::setContainer($aux);
$app = AppFactory::create();
$app->setBasePath('/SLIM4/public');

$container = $app->getContainer();

require __DIR__."/Configs.php";
require __DIR__ . "/Dependencies.php";
require __DIR__ . "/Services.php";
require __DIR__ . "/Models.php";
require __DIR__."/Routes.php";



$app->addErrorMiddleware(true, true, true);
$app->run();
?>