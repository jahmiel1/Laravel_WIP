<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        return view("auth.login");

    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(
            ['email' => $request->email , 'password' => $request->password, 'is_admin'=>0])) {

            return redirect()->route('Dashboard');

        } else if(Auth::attempt(
            ['email' => $request->email, 'password' => $request->password, 'is_admin' => 1]))
         {
            return redirect()->route('Admin');
        }

        return redirect()->back()->with('login_status','Invalid Credentials');

    }
}
