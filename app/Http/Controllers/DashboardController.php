<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboardModern()
    {
        return view('admin.dashboard');
    }
}
