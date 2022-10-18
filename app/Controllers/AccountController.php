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

        if(count($result) > 0) {
            if(password_verify($password, $result['password'])){
                if($result['level'] == 'Petani') {
                    return redirect()->route('/base');
                } else {
                    return redirect()->route('/login');
                }
            } else {
                return redirect()->route('/login');
            }
        }
    }

    public function farmer_add()
    {
        $model = new AccountModel();

        if(!$this->validate([
            'username' => 'required',
            'password' => 'required',
            'password-re' => 'required'
        ])){
            return redirect()->route('/register');
        }

        $model = new AccountModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => 'Petani'
        ];
        
        if($this->request->getPost('password') == $this->request->getPost('password-re')) {
            $model->save($data);
    
            return redirect()->route('/login');
        } else {
            return redirect()->route('/register');
        }
    }
}
