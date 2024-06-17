<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JanjiRsController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RadiologiController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\DokterController;
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

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');


// dokter
Route::get('/jadwal-dokter', [DokterController::class, 'index'])->name('jadwal-dokter');

Route::get('/rekam-medis', [RekamController::class,'index'])->name('rekam-medis');
Route::get('/lihat-rekam-medis}', [RekamController::class,'show'])->name('lihat-rekam-medis');

Route::get('/jadwal-dokter', [JadwalController::class, 'index'])->name('jadwal-dokter');
Route::get('/lihat-jadwal-spesialis/{id}',[JadwalController::class,'lihat_jadwal_spesialis'])->name('lihat-jadwal-spesialis');
Route::get('/lihat-jadwal-dokter/{id}',[JadwalController::class,'lihat_jadwal_dokter'])->name('lihat-jadwal-dokter');

Route::post('/jadwal-dokter-proses', [JadwalController::class, 'jadwal_dokter_proses'])->name('jadwal-dokter-proses');

Route::get('/api/dokter', [DokterController::class, 'getDokterBySpesialis']);
Route::get('/api/jadwal', [DokterController::class, 'getJadwalByDokter']);



Route::get('/registrasi-pasien', [PasienController::class, 'registrasi_pasien'])->name('registrasi-pasien');
Route::post('/registrasi-pasien-proses',[PasienController::class,'registrasi_pasien_proses'])->name('registrasi-pasien-proses');



//Route::get('/registrasi-pasien', [PasienController::class, 'index'])->name('registrasi-pasien');
Route::get('/registrasi-janji-rs', [JanjiRsController::class, 'index'])->name('registrasi-janji-rs');
Route::get('/registrasi-labo', [LaboratoriumController::class, 'index'])->name('registrasi-labo');
Route::get('/registrasi-radio', [RadiologiController::class, 'index'])->name('registrasi-radio');

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

  Route::get('/detail/{id}',[HomeController::class,'detail'])->name('admin.detail');
  
  Route::put('/update/{id}',[HomeController::class,'update'])->name('admin.update');
  
  Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('admin.delete');