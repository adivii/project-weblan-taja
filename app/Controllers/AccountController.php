<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class AccountController extends BaseController
{
    public function verify()
    {
        $model = new AccountModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $result = $model->find($username);

        if ($result) {
            if (password_verify($password, $result['password'])) {
                if ($result['level'] == 'Farmer') {
                    session()->set(
                        ['user' => $username,
                        'level' => 'farmer']
                    );
                    return redirect()->to('/farmer/home');
                } else if ($result['level'] == 'Admin') {
                    session()->set(
                        ['user' => 'admin',
                        'level' => 'admin']
                    );
                    return redirect()->to('/admin/dashboard');
                } else if ($result['level'] == 'Penyuluh') {
                    session()->set(
                        ['user' => $username,
                        'level' => 'penyuluh']
                    );
                    return redirect()->to('/penyuluh/dashboard');
                } else {
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('error', 'Password salah!');
                return redirect()->to('/login');
            }
        }else{
            session()->setFlashdata('error', 'Username tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
