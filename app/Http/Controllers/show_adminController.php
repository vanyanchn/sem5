<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class show_adminController extends Controller
{
    public function show_Dashboard()
    {
        return view('admin.pages.dashboard.dashboard');
    }
}
