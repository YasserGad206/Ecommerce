<?php

namespace App\Http\Controllers;

use App\Http\Requests\validlogin;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkmodel extends Controller
{
    //
    public function index(validlogin $request){

  
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
         
            return view('admin.dashboard');
       }
       else{
        return 'not auth';
       }
    }
}
