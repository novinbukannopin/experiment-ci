<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function login()
    {
        $session = \Config\Services::session();

        if ($session->get('isLogin')) {
            return redirect()->to('/dashboard');
        }

        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');
        $data = [
            "title" => "Login"
        ];
        return view('layouts/header', $data) . view('forms/login', $data) . view('layouts/footer');
    }
    public function register()
    {
        $session = \Config\Services::session();

        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');
        $data = [
            "title" => "Register"
        ];
        return view('layouts/header', $data) . view('forms/register') . view('layouts/footer');
    }
    public function register_auth()
    {
        $userModel = new \App\Models\UserModels();
        // $session = \Config\Services::session();

        $token = rand(1000000, 9999999);
        // $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        // $data = [
        //     'email' => $this->request->getVar('email'),
        //     'password' => $this->request->getVar('password'),
        //     'token' => "123"
        // ];

        $addNewUser = $userModel->save([
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'token' => "123"
        ]);
        if ($addNewUser) {
            echo "OK SUCCESS";
        } else {
            echo "WALAH";
        }
        // if ($addNewUser) {
        //     $session->setFlashdata('message', 'thanks for registrating here 😍');
        //     return redirect()->to('/login');
        // } else {
        //     $session->setFlashdata('message', 'please try again later 😢');
        //     return redirect()->back();
        // }
    }
}
