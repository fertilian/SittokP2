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
        $request->validate([
            'user_email' =>  'required',
            'password'  =>  'required'
        ]);

        $credetials = $request->only('user_email', 'password');
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Berhasil');

        }return back()->with('error', 'Email or Password salah');
    }

}