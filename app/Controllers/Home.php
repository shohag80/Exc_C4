<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/pages/home');
    }

    public function users(){
        return view('frontend/pages/users/user');
    }
}
