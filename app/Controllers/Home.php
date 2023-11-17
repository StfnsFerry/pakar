<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing-page/home');
    }

    public function newarrival(): string
    {
        return view('landing-page/new_arrival');
    }

    public function shop(): string
    {
        return view('landing-page/shop');
    }

    public function login(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }
}
