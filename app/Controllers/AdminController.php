<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\EventController;
use App\Models\AccountModel;
use App\Models\EventModel;

class AdminController extends BaseController
{
    public function index()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'admin') {
                return redirect()->to('/login');
            }
        }

        $account_model = new AccountModel();
        $event_control = new EventController();

        $farmers = $account_model->where('level = \'Petani\'')->findAll();
        $penyuluh = $account_model->where('level = \'Penyuluh\'')->findAll();

        $data['title'] = 'Dashboard';
        if ($penyuluh) {
            $data['penyuluh_count'] = count($penyuluh);
        } else {
            $data['penyuluh_count'] = 0;
        }

        if($farmers) {
            $data['farmers_count'] = count($farmers);
        } else {
            $data['farmers_count'] = 0;
        }

        return view('admin/dashboard', $data);
    }

    public function event_update($id) {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'penyuluh') {
                return redirect()->to('/login');
            }
        }

        $event_control = new EventController();

        return view('admin/event_edit', $event_control->get_one_event($id));
    }

    public function penyuluh_add() {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'admin') {
                return redirect()->to('/login');
            }
        }

        $data['title'] = 'Add Penyuluh';
        return view('penyuluh/register_penyuluh', $data);
    }
}
