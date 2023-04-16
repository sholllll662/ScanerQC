<?php

namespace App\Controllers;

use App\Models\userModel;

class Login extends BaseController
{
    public function index()
    {

        return view('login');
    }

    public function login_action()
    {
        $usermodel = new userModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        // $username = isset($row['username']) ? $row['username'] : 'NULL';
        // $password = isset($row['password']) ? $row['password'] : 'NULL';
        $cek = $usermodel->get_data($username, $password);

        if ($cek && ($cek['username'] == $username) && ($cek['password'] == $password)) {
            // dd($cek);
            session()->set('username', $cek['username']);
            session()->set('password', $cek['password']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('admin'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password Salah');
            return redirect()->to(base_url('/'));
        }
    }
}
// session()->setFlashdata('Gagal Login', 'Username / Password Salah');
