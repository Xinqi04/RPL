<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Route::get('/', function () {
  //  return view('welcome'); 
//});

Route::get('/', [HomeController::class,'laman_utama'])->name('laman-utama');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Route::group(['prefix'=> 'admin', 'middleware'=> ['auth'], 'as' => 'admin'], function () {
//   Route::get('/admin',[HomeController::class,'index'])->name('index');
//   Route::get('/laman-masuk', [HomeController::class,'laman_masuk'])->name('laman-masuk');
//   Route::get('/create',[HomeController::class,'create'])->name('admin.create');
  
//   Route::post('/store',[HomeController::class,'store'])->name('admin.store');
  
//   Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin.edit');
  
//   Route::put('/update/{id}',[HomeController::class,'update'])->name('admin.update');
  
//   Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('admin.delete');
// });

Route::get('/admin',[HomeController::class,'index'])->name('index');
  Route::get('/laman-masuk', [HomeController::class,'laman_masuk'])->name('laman-masuk');
  Route::get('/create',[HomeController::class,'create'])->name('admin.create');
  
  Route::post('/store',[HomeController::class,'store'])->name('admin.store');
  
  Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin.edit');
  
  Route::put('/update/{id}',[HomeController::class,'update'])->name('admin.update');
  
  Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('admin.delete');

