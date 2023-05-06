<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
    return view('login');
});

Route::get('/register' , [CustomAuthController::class, 'register'])->name('register');
Route::post('/register' , [CustomAuthController::class, 'registerPost'])->name('register');

Route::get('/login', function () {
    return view('login');
});

Route::get('/Admin/indexadmin', function () {
    return view('Admin.indexadmin');
});