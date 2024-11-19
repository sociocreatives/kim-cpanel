<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardcontroller extends Controller
{
    function AdminDashboard()
    {
        return view('admin.dashboard');
    }
}
 