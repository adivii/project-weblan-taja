<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TutorialModel;

class TutorialController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        //
    }

    public function get()
    {
        $model = new TutorialModel();
        $tutorials = $model->orderBy('published_date', 'DESC')->findall();

        $data['title'] = 'Tutorial List';
        $data['tutorials'] = $tutorials;

        return  $data;
    }

    public function get_by_contributor($username)
    {
        $model = new TutorialModel();
        $tutorials = $model->orderBy('published_date', 'DESC')->where('contributor', $username)->findall();

        $data['title'] = 'Tutorial List';
        $data['tutorials'] = $tutorials;

        return  $data;
    }

    public function tutorial_create()
    {
        if (null === session()->get('level')) {
            return redirect()->to('/login');
        } else {
            if (session()->get('level') !== 'penyuluh' && session()->get('level') !== 'farmer') {
                return redirect()->to('/login');
            }
        }

        $data['title'] = 'Create Tutorial';
        return view('penyuluh/tutorial/tutorial_create', $data);
    }

    public function save($role)
    {
        $model = new TutorialModel();

        // $img = $this->request->getFile('cover_image');
        // $filepath = WRITEPATH . 'uploads/' . $img->store();
        // $img->move(ROOTPATH.'public/assets/uploads/', $img);

        $target_dir = ROOTPATH . 'public/assets/uploads/tutorial_cover/';
        $imageFileType = strtolower(pathinfo($target_dir . basename($_FILES["cover_image"]["name"]), PATHINFO_EXTENSION));
        $filename = strval($this->get() ? count($this->get()) : 0) . '-' . $this->request->getPost('judul_tutorial') . '.' . $imageFileType;
        $target_file = $target_dir . $filename;
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_dir . basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image

        // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["cover_image"]["tmp_name"], $target_file)) {
            $data = [
                'judul' => $this->request->getPost('judul_tutorial'),
                'content' => $this->request->getPost('content_tutorial'),
                'cover_image' => '/assets/uploads/tutorial_cover/' . $filename,
                'contributor' => session()->get('user'),
                'published_date' => date("Y-m-d"),
            ];

            $model->save($data);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        return redirect()->to('/' . $role . '/dashboard');
    }
}
