<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return  view('pages/home', $data);
    }

    public function show($page = "home")
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter

        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            return view('pages/not-found.php', $data);
        }

        // return view('templates/header', $data)
        //     . view('pages/' . $page)
        //     . view('templates/footer');
        return view('pages/' . $page, $data);
    }
}
