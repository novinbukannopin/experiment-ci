<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layouts/header') . view('forms/login') . view('layouts/footer');
    }
}
