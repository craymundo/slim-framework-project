<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\BaseController;

class MenuController extends BaseController {

    public function getAll($request, $response, $args) {
        $payload = $this->container->get('menuService')->getAll();
  
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }
}
