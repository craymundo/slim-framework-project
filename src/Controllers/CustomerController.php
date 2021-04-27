<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\BaseController;

use App\Exception\Customer;

class CustomerController extends BaseController {


    public function getDataCustomer(Request $request,Response $response, $args) {
      
        try {
            $input = (array) $request->getParsedBody();
            $customer = json_decode((string) json_encode($input), false);

            if (!isset($customer->documentNumber)) {
                throw new \App\Exception\Customer('The field "documentNumber" is required.', 400);
            }
      
            $payload = $this->container->get('customerService')->getData($customer->documentNumber);

            if(!isset($payload -> name)) {
                throw new \App\Exception\Customer('User not found.', 404);
            }
      
            $response->getBody()->write(json_encode($payload));
            return $response
                ->withHeader('content-type', 'application/json')
                ->withStatus(200);
        } catch (\Throwable $th) {
            $data = [
                'message' => $th->getMessage(),
                'status' => 'error',
                'code' =>  $th->getCode(),
            ];
            $body = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
            $response->getBody()->write((string) $body);
            return $response
                ->withHeader('content-type', 'application/json')
                ->withStatus( $th->getCode());
        }
      
     
    }
}
