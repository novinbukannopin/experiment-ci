<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('layouts/header') . view('pages/dashboard') . view('layouts/footer');
    }
}
