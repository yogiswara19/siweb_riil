<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/overview', $data);
        // return view('overviews');
        // return view('welcome_message');
    }

    public function tugasContainer()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('tugas/container', $data);
    }

    public function tugas2()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('tugas2/index', $data);
    }
}
