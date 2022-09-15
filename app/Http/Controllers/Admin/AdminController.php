<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function Index(){


        return view('admin.auth.login');
    }

    public function Login(Request $request){
        $check=$request->all();
        if(Auth::guard('admin')->attempt([
            'email'=>$check['email'],
            'password'=>$check['password'],
        ])){
            return Redirect::route('admin.dashboard')->with('error','Admin Login Successfully.');
        }else{
            return back()->with('error','Invalid Email or Password.');
        }


        return view();
    }

    public function Dashboard(){


        return view('admin.dashboard');
    }
}
