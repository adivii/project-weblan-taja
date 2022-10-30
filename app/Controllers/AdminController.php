<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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

        $event_model = new EventModel();
        $events = $event_model->findall();

        $data['title'] = 'Dashboard';
        if ($events) {
            $data['events_count'] = count($events);
        } else {
            $data['events_count'] = 0;
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
        $events = $event_model->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  view('admin/event_list', $data);
    }
}
