<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class LoginController
{
    public function login(){
        return view('admin.login');
    }

    
    public function doLogin(){
        $input=request()->only(['username','password']);
        
        if(auth()->guard('admin')->attempt($input,request('remeber_me'))){
            return redirect()->route('admin.dashboard');
        }
        else{
            return "login failde";
        }
       
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
