<?php


namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;


class WelcomeController
{
    public function index(Response $response): Response
    {
        $response->getBody()->write("Hello world!");
        return $response;
    }

    public function show(Response $response, $name): Response
    {
        $response->getBody()->write("Welcome on $name");
        return $response;
    }
}