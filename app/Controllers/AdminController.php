<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        $event_model = new EventModel();

        $farmers = $account_model->where('level = \'Petani\'')->findAll();
        $events = $event_model->where('waktu_event >= DATE(NOW())')->findall();

        $data['title'] = 'Dashboard';
        if ($events) {
            $data['events_count'] = count($events);
        } else {
            $data['events_count'] = 0;
        }

        if($farmers) {
            $data['farmers_count'] = count($farmers);
        } else {
            $data['farmers_count'] = 0;
        }

        return  view('admin/dashboard', $data);
    }

    public function event_list()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'admin') {
                return redirect()->to('/login');
            }
        }

        $event_model = new EventModel();
        $events = $event_model->where('waktu_event >= DATE(NOW())')->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  view('admin/event_list', $data);
    }
}
