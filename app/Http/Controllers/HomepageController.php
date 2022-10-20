<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data = array('title' => 'Halaman tentang kami');
        return view('homepage.about', $data);
    }

    public function kategori()
    {
        $data = array('title' => 'Halaman tentang kami');
        return view('homepage.kategori', $data);
    }

    public function dashboard()
    {
        $data = array('title' => 'Halaman admin');
        return view('dashboard.index', $data);
    }
}

