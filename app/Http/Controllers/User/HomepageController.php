<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController
{


    public function Home(){
        return view('users.home');
    }
}
