<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AntrianController;

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
Route::get('/',function(){
    return view('layouts.master');
});

Route::resource('/user',UserController::class);

// Route::get('/mahasiswa/{nama}/{umur}/{kota}', function ($nama,$umur,$kota) {

//     return view('index')
//     ->with ('nama',$nama)
//     ->with('umur',$umur)
//     ->with('kota',$kota);
// });
Route::resource('/home',HomeController::class);
Route::get('/home/{menu}',[HomeController::class,'menu']);

// //antrian
// Route::redirect('/rs_antrian/index','/antrian');
// Route::resource('/antrian',AntrianController::class);
