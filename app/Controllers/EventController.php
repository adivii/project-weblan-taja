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

    public function event_create()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'penyuluh') {
                return redirect()->to('/login');
            }
        }

        $data['title'] = 'Create Event';
        return view('admin/event_create', $data);
    }

    public function event_list() {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'penyuluh') {
                return redirect()->to('/login');
            }
        }

        $event_control = new EventController();

        return view('admin/event_list', $event_control->get_event_history());
    }

    public function get_event()
    {
        $event_model = new EventModel();
        $events = $event_model->where('waktu_event >= DATE(NOW())')->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  $data;
    }

    public function get_one_event($id)
    {
        $event_model = new EventModel();
        $event = $event_model->find($id);

        $data['title'] = 'Event Edit';
        $data['event'] = $event;

        return  $data;
    }

    public function get_event_history()
    {
        $event_model = new EventModel();
        $events = $event_model->orderBy('waktu_event', 'DESC')->findall();

        $data['title'] = 'Event List';
        $data['events'] = $events;

        return  $data;
    }

    public function delete_event($id)
    {
        $event_model = new EventModel();
        $event_model->delete($id);

        return redirect()->to('/admin/dashboard');
    }

    public function save()
    {
        $model = new EventModel();

        $data = [
            'judul_event' => $this->request->getPost('judul_event'),
            'waktu_event' => $this->request->getPost('waktu_event'),
            'tempat_event' => $this->request->getPost('tempat_event'),
        ];

        $model->save($data);

        return redirect()->to('/penyuluh/dashboard');
    }

    public function update($id)
    {
        $model = new EventModel();

        $data = [
            'judul_event' => $this->request->getPost('judul_event'),
            'waktu_event' => $this->request->getPost('waktu_event'),
            'tempat_event' => $this->request->getPost('tempat_event'),
        ];

        $model->update($id, $data);

        return redirect()->to('/penyuluh/dashboard');
    }

    public function delete($id)
    {
        $this->EventModel->delete($id);
        return redirect()->to('/event');
    }
}
