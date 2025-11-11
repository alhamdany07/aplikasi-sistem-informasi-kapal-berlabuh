<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $userModel = new UserModel();

        // ✅ Buat akun admin otomatis jika belum ada
        $admin = $userModel->where('username', 'admin')->first();
        if (!$admin) {
            $userModel->save([
                'username' => 'admin',
                'password' => password_hash('12345', PASSWORD_DEFAULT),
                'role'     => 'admin'
            ]);
        }

        // ✅ Buat akun user otomatis jika belum ada
        $user = $userModel->where('username', 'user')->first();
        if (!$user) {
            $userModel->save([
                'username' => 'user',
                'password' => password_hash('12345', PASSWORD_DEFAULT),
                'role'     => 'user'
            ]);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $ses_data = [
                    'id_user'  => $data['id_user'],
                    'username' => $data['username'],
                    'role'     => $data['role'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_data);

                if ($data['role'] == 'admin') {
                    return redirect()->to('/dashboard');
                } elseif ($data['role'] == 'user') {
                    return redirect()->to('/user');
                } else {
                    return redirect()->to('/login');
                }


                // ✅ Redirect sesuai role
                if ($data['role'] == 'admin') {
                    return redirect()->to('/dashboard');
                } elseif ($data['role'] == 'user') {
                    return redirect()->to('/user');
                }
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
