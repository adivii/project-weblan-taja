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

    public function get_one_event($id) {
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

    public function delete_event($id) {
        $event_model = new EventModel();
        $event_model->delete($id);
    
        return redirect()->to('/admin/dashboard');
    }

    public function save(){
        $model = new EventModel();

        $data = [
            'judul_event' => $this->request->getPost('judul_event'),
            'waktu_event' => $this->request->getPost('waktu_event'),
            'tempat_event' => $this->request->getPost('tempat_event'),];

        $model->save($data);

        return redirect()->to('/admin/dashboard');
    }

    public function update($id){
        $model = new EventModel();

        $data = [
            'judul_event' => $this->request->getPost('judul_event'),
            'waktu_event' => $this->request->getPost('waktu_event'),
            'tempat_event' => $this->request->getPost('tempat_event'),];

        $model->update($id, $data);

        return redirect()->to('/admin/dashboard');
    }

    public function delete($id){
        $this->EventModel->delete($id);
        return redirect()->to('/event');
    }
}
