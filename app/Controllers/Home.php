<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function don(): string
    {
        return view('don');
    }

    public function Dashboard(): string
    {
        return view('dashboard');
    }
}
