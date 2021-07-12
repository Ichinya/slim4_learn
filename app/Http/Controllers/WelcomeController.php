<?php


namespace App\Http\Controllers;

use App\Support\View;
use App\User;
use Psr\Http\Message\ResponseInterface as Response;


class WelcomeController
{
    public function index(View $view, User $user): Response
    {
        $user = $user->find(1);
        $name = 'TITLE';
        return $view('auth.home', compact('name', 'user'));
    }

    public function show(View $view, $name): Response
    {
        return $view('user.show', compact('name'));
    }
}