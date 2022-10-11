<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function event_list()
    {
        $event_model = new EventModel();
        $events = $event_model->findall();

        $data['events'] = $events;
        
        return  view('admin/event_list', $data);
    }
}
