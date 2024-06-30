<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function attemptLogin()
    {
        $session = session();
        $model = new UserModel();
        
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $model->where('username', $username)->first();
        
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_id' => $data['id'], // Simpan user_id ke sesi
                    'username' => $data['username'], // Simpan username ke sesi
                    'nama_lengkap' => $data['nama_lengkap'],
                    'email' => $data['email'],
                    'jenis_kelamin' => $data['jenis_kelamin'],
                    'role' => $data['role'], // Simpan role ke sesi
                    'isLoggedIn' => true
                ];
                $session->set($ses_data);

                // Arahkan berdasarkan peran pengguna
                if ($data['role'] == 'pengurus') {
                    return redirect()->to('/pengurus');
                } elseif ($data['role'] == 'warga') {
                    return redirect()->to('/warga');
                } else {
                    return redirect()->to('/dashboard'); // Default dashboard
                }
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function attemptRegister()
    {
        $userModel = new UserModel();
        $data = [
            'nama_lengkap'   => $this->request->getVar('nama_lengkap'),
            'email'          => $this->request->getVar('email'),
            'username'       => $this->request->getVar('username'),
            'password'       => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'role'           => 'warga' // Default role
        ];
        $userModel->save($data);
        return redirect()->to('/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
