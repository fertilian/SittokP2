<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class loginauthcontroller extends Controller
{
    
    public function loginn()
    {
         return view('loginn');
    }

    public function loginPost(Request $request)
    {
        $credetials = [
            'user_email' => $request->user_email,
            'password' => $request->user_password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/Admin.indexadmin')->with('success', 'Login Berhasil');

        }return back()->with('error', 'Email or Password salah');
    }
}
