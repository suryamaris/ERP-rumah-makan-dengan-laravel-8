<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login', [
        'title' => 'Login Page'
    ]);
});


Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/admin', function () {
    return view('admin/karyawan/dashboard', [
        'title' => 'Admin'
    ]);
});
Route::get('admin/karyawan/add', [registerController::class, 'add']);
Route::post('admin/karyawan/add', [registerController::class, 'store']);
