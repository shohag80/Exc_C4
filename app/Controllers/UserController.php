<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->paginate(10);
        $pager = $userModel->pager;
        return view('frontend/pages/users/user', compact('users', 'pager'));
    }

    public function loadData()
    {
        $userModel = new User();
        $users = $userModel->getData(0, 10); // Load the first 10 records

        return view('frontend/pages/users/load', compact('users'));
    }

    public function loadMoreData()
    {
        $start = $this->request->getGet('start'); // Get the starting point for pagination
        $limit = 10; // Number of records to load per request

        $userModel = new User();
        $users = $userModel->getData($start, $limit);

        // Return the partial view containing the data
        return view('frontend/pages/users/load_more', compact('users'));
    }
}
