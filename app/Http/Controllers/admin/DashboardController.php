<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController
{
    public function  dashboard(){
        return view('admin.dashboard');
    }
}
