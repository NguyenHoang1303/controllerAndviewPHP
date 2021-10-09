<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('admin.dashboard');
    }

}
