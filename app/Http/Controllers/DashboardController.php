<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = array(
            'fname' => 'Ayush',
            'lname' => 'Likhar'
        );

        return Inertia::render('Dashboard/Index', $data);
    }
}
