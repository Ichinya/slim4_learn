<?php


namespace App\Http\Controllers;

use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;


class WelcomeController
{
    public function index(View $view, Response $response): Response
    {
        return $view('auth.home', [
            'name' => 'Slim View'
        ]);
    }

    public function show(View $view, $name): Response
    {
        return $view('user.show', compact('name'));
    }
}