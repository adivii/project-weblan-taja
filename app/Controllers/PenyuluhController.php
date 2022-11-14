<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\PenyuluhModel;

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
        $account_model = new AccountModel();
        $penyuluh_model = new PenyuluhModel();

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
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik wajib diisi!',
                ]
            ],
            'nama-lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap wajib diisi!',
                ]
            ],
            'nomor-telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telepon wajib diisi!',
                ]
            ],
            'wkpp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wkpp wajib diisi!',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat wajib diisi!',
                ]
            ],
            'tanggal-lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir wajib diisi!',
                ]
            ],
            'pendidikan-terakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pendidikan Terakhir wajib diisi!',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/penyuluh/add');
        }

        $data_account = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level' => 'Penyuluh'
        ];

        $data_penyuluh = [
            'username' => $this->request->getPost('username'),
            'nik' => $this->request->getPost('nik'),
            'nama_lengkap' => $this->request->getPost('nama-lengkap'),
            'nomor_telepon' => $this->request->getPost('nomor-telepon'),
            'wkpp' => $this->request->getPost('wkpp'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_lahir' => $this->request->getPost('tanggal-lahir'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan-terakhir')
        ];

        if ($this->request->getPost('password') == $this->request->getPost('password-re')) {
            $account_model->save($data_account);
            $penyuluh_model->save($data_penyuluh);

            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/penyuluh/add');
        }
    }

    public function get_profile($username)
    {
        $penyuluh_model = new PenyuluhModel();

        $profile = $penyuluh_model->find($username);

        $data['title'] = 'Taja | Profil Penyuluh';
        $data['profile'] = $profile;

        return view('penyuluh/profile', $data);
    }

    public function update_profile($username)
    {
        $penyuluh_model = new PenyuluhModel();

        $current_data = $penyuluh_model->find($username);

        $data_penyuluh = [
            'nik' => (trim((string) $this->request->getPost('nik')) != '') ? $this->request->getPost('nik') : $current_data['nik'],
            'nama_lengkap' => (trim((string) $this->request->getPost('nama-lengkap')) != '') ? $this->request->getPost('nama-lengkap') : $current_data['nama_lengkap'],
            'nomor_telepon' => (trim((string) $this->request->getPost('nomor-telepon')) != '') ? $this->request->getPost('nomor-telepon') : $current_data['nomor_telepon'],
            'wkpp' => (trim((string) $this->request->getPost('wkpp')) != '') ? $this->request->getPost('wkpp') : $current_data['wkpp'],
            'alamat' => (trim((string) $this->request->getPost('alamat')) != '') ? $this->request->getPost('alamat') : $current_data['alamat'],
            'tanggal_lahir' => (trim((string) $this->request->getPost('tanggal-lahir')) != '') ? $this->request->getPost('tanggal-lahir') : $current_data['tanggal_lahir'],
            'pendidikan_terakhir' => (trim((string) $this->request->getPost('pendidikan-terakhir')) != '0') ? $this->request->getPost('pendidikan-terakhir') : $current_data['pendidikan_terakhir']
        ];

        $penyuluh_model->update($username, $data_penyuluh);

        return redirect()->to('/penyuluh/profile/'.$username);
    }
}
