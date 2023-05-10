<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
      
    public function registerPost(Request $request)
    {  
        $user = new User();

        $user->user_email = $request->user_email;
        $user->password = $request->password;
        $user->user_fullname = $request->user_fullname;
        $user->alamat = $request->alamat;

        $user->save();
         
        return back()->with('success', 'Register Berhasil');
    }

    
}