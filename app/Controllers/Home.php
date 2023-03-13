<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home"
        ];
        return view('layouts/header', $data) . view('homepage') . view('layouts/footer');
    }
    public function about()
    {
        $data = [
            "title" => "About"
        ];
        return view('layouts/header', $data) . view('about') . view('layouts/footer');
    }
    public function login()
    {
        return view('layouts/header') . view('forms/login') . view('layouts/footer');
    }
    public function register()
    {
        return view('layouts/header') . view('forms/register') . view('layouts/footer');
    }
}
