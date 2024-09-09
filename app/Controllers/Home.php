<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/pages/home');
    }

    public function users(){
        $userModel = new User();
        $users = $userModel->paginate(10);
        $pager = $userModel->pager;
        return view('frontend/pages/users/user', compact('users', 'pager'));
    }
}
