<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

        public function dashboard()
        {
            $data = array('title' => 'index');
            return view('dashboard.index', $data);
        }

}
