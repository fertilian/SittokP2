<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\loginauthcontroller;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('loginn');
});

Route::get('/register' , [CustomAuthController::class, 'register'])->name('register');
Route::post('/register' , [CustomAuthController::class, 'registerPost'])->name('register');

Route::get('/loginn' , [loginauthcontroller::class, 'loginn'])->name('loginn');
Route::post('/loginn' , [loginauthcontroller::class, 'loginPost'])->name('loginn');

Route::get('/Admin/indexadmin', function () {
    return view('Admin.indexadmin');
});

Route::get('Admin/user/list', function () {
    return view('Admin.user.list');
});

Route::get('Admin/jual/list', function () {
    return view('Admin.jual.list');
});