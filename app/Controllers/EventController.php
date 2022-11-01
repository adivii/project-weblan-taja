<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;

class EventController extends BaseController
{
    public function index()
    {
        //
    }

    public function get_event()
    {
        $event_model = new EventModel();
        $events = $event_model->where('waktu_event >= DATE(NOW())')->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  $data;
    }

    public function get_event_history()
    {
        $event_model = new EventModel();
        $events = $event_model->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  $data;
    }

    public function delete_event($id) {
        $event_model = new EventModel();
        $event_model->delete($id);
    
        return redirect()->to('/admin/dashboard');
    }
}
