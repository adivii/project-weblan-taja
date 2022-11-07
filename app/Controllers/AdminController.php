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
        $events = $event_control->get_event()['events'];

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

        return view('admin/dashboard', $data);
    }

    public function event_list() {
        $event_control = new EventController();

        return view('admin/event_list', $event_control->get_event_history());
    }

    public function event_create() {
        $data['title'] = 'Create Event';
        return view('admin/event_create', $data);
    }
}
