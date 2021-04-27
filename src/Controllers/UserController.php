<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\BaseController;
use App\Exception\User;

class UserController  extends BaseController {

    public function login($request, $response, $args) {

        try {
            $input = (array) $request->getParsedBody();
            $user = json_decode((string) json_encode($input), false);
    
             if (!isset($user->user)) {
                throw new \App\Exception\User('The field "user" is required.', 400);
            }
            if (! isset($user->password)) {
               throw new \App\Exception\User('The field "password" is required.', 400);
            } 
          
            $payload = $this->container->get('userService')->login($user->user, $user->password);

            if(!isset($payload -> name)) {
                throw new \App\Exception\User('User not found.', 404);
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
