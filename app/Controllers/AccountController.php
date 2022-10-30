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

        if (count($result) > 0) {
            if (password_verify($password, $result['password'])) {
                if ($result['level'] == 'Petani') {
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
                    return redirect()->to('/admin/event');
                } else {
                    return redirect()->to('/login');
                }
            } else {
                return redirect()->to('/login');
            }
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
