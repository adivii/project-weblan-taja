<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome',
            'header_background' => 'transparent'
        ];
        return  view('pages/base', $data);
    }

    public function show($page = "base")
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['header_background'] = 'var(--primary-color)';

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
