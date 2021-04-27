<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\BaseController;

class OperationController extends BaseController {

    public function report($request, $response, $args) {
        $payload = $this->container->get('operationService')->report();
  
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }

    public function add($request, $response, $args) {
        $input = (array) $request->getParsedBody();
        $operation = json_decode((string) json_encode($input), false);
  
        $payload = $this->container->get('operationService')->add($operation->customerId, $operation->menuId);
  
        $response->getBody()->write(json_encode($payload));
        return $response
            ->withHeader('content-type', 'application/json')
            ->withStatus(200);
    }
}
