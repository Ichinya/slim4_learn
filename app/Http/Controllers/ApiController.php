<?php

namespace App\Http\Controllers;

use App\User;
use Psr\Http\Message\ResponseInterface as Response;

class ApiController
{
    public function index(Response $response): Response
    {
        $user = User::find(1);
        $response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

        return $response;
    }
}