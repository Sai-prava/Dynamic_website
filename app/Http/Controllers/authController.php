<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class authController extends Controller
{
    //login
    public function login(){
        if (!empty(Auth::check())) {
            return redirect()->route('Dashboard');
        }
        return view('auth.login');
    }
    public function checkLogin(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)){
            return redirect()->route('Dashboard')->with('success','login Successfully');
        }else{
            return redirect()->back()->with('error');
        }
    }
    

    //logout
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
