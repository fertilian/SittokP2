<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $users=user::orderBy('created_at', 'DESC')->get();
        return view('Admin.user.list', compact('users'));
    }
}
