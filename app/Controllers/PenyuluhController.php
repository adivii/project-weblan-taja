<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class PenyuluhController extends BaseController
{
    public function dashboard()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'penyuluh') {
                return redirect()->to('/login');
            }
        }

        $account_model = new AccountModel();
        $event_control = new EventController();

        $farmers = $account_model->where('level = \'Farmer\'')->findAll();
        $events = $event_control->get_event()['events'];

        $data['title'] = 'Dashboard';
        if ($events) {
            $data['events_count'] = count($events);
        } else {
            $data['events_count'] = 0;
        }

        if ($farmers) {
            $data['farmers_count'] = count($farmers);
        } else {
            $data['farmers_count'] = 0;
        }

        return view('penyuluh/dashboard', $data);
    }

    public function save()
    {
        $model = new AccountModel();

        if (!$this->validate([
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
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/register');
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => 'Penyuluh'
        ];

        if ($this->request->getPost('password') == $this->request->getPost('password-re')) {
            $model->save($data);

            return redirect()->to('/login');
        } else {
            return redirect()->to('/register');
        }
    }
}
