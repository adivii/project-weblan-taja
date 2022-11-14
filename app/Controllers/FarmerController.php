<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class FarmerController extends BaseController
{
    public function index()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'farmer') {
                return redirect()->to('/login');
            }
        }

        $data['title'] = ucfirst('welcome');
        return view('farmer/base', $data);
    }

    public function show($pages){
        
    }

    public function farmer_add()
    {
        $model = new AccountModel();

        if(!$this->validate([
            'username' => [
                'rules' => 'required|min_length[8]|max_length[20]|is_unique[accounts.username]',
                'errors' => [
                    'required' => 'Username wajib diisi!',
                    'min_length' => 'Panjang Username minimal 8 digit!',
                    'max_length' => 'Panjang Username maksimal 20 digit!',
                    'is_unique' => 'Username harus unik!'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password wajib diisi!',
                    'min_length' => 'Panjang Password minimal 8 digit!'
                ]
            ],
            'password-re' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Password wajib diisi!',
                    'matches' => 'Password harus sesuai!'
                ]
            ]
        ])){
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/register');
        }

        $model = new AccountModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => 'Petani'
        ];
        
        if($this->request->getPost('password') == $this->request->getPost('password-re')) {
            $model->save($data);
    
            return redirect()->to('/login');
        } else {
            return redirect()->to('/register');
        }
    }
}
