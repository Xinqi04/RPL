<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JanjiRsController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RadiologiController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

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
Route::get('/login-berhasil',[LoginController::class,'login_berhasil'])->name('login-berhasil');
Route::get('/profile',[LoginController::class,'profile'])->name('profile');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');


// dokter
Route::get('/jadwal-dokter', [DokterController::class, 'index'])->name('jadwal-dokter');

Route::get('/rekam-medis', [RekamController::class,'index'])->name('rekam-medis');
Route::get('/lihat-rekam-medis/{id}', [RekamController::class,'show'])->name('lihat-rekam-medis');
Route::get('/download-rekam-medis/{id}', [RekamController::class,'download'])->name('download-rekam-medis');

Route::get('/jadwal-dokter', [JadwalController::class, 'index'])->name('jadwal-dokter');
Route::get('/lihat-jadwal-spesialis/{id}',[JadwalController::class,'lihat_jadwal_spesialis'])->name('lihat-jadwal-spesialis');
Route::get('/lihat-jadwal-dokter/{id}',[JadwalController::class,'lihat_jadwal_dokter'])->name('lihat-jadwal-dokter');

Route::post('/jadwal-dokter-proses', [JadwalController::class, 'jadwal_dokter_proses'])->name('jadwal-dokter-proses');

Route::get('/api/dokter', [DokterController::class, 'getDokterBySpesialis']);
Route::get('/api/jadwal', [DokterController::class, 'getJadwalByDokter']);



Route::get('/registrasi-pasien', [PasienController::class, 'registrasi_pasien'])->name('registrasi-pasien');
Route::post('/registrasi-pasien-proses',[PasienController::class,'registrasi_pasien_proses'])->name('registrasi-pasien-proses');
Route::get('/registrasi-pasien-berhasil',[PasienController::class,'registrasi_pasien_berhasil'])->name('registrasi-pasien-berhasil');


//Route::get('/registrasi-pasien', [PasienController::class, 'index'])->name('registrasi-pasien');
Route::get('/registrasi-janji-rs', [JanjiRsController::class, 'index'])->name('registrasi-janji-rs');
Route::post('/registrasi-janji-rs-proses', [JanjiRsController::class, 'registrasi_janji_rs_proses'])->name('registrasi-janji-rs-proses');
Route::get('/registrasi-janji-rs-berhasil', [JanjiRsController::class,'registrasi_janji_rs_berhasil'])->name('registrasi-janji-rs-berhasil');

Route::get('/registrasi-labo', [LaboratoriumController::class, 'index'])->name('registrasi-labo');
Route::post('/registrasi-labo-proses', [LaboratoriumController::class, 'registrasi_labo_proses'])->name('registrasi-labo-proses');
Route::get('/registrasi-labo-berhasil', [LaboratoriumController::class, 'registrasi_labo_berhasil'])->name('registrasi-labo-berhasil');

Route::get('/registrasi-radio', [RadiologiController::class, 'index'])->name('registrasi-radio');
Route::post('/registrasi-radio-proses', [RadiologiController::class, 'registrasi_radio_proses'])->name('registrasi-radio-proses');
Route::get('/registrasi-radio-berhasil', [RadiologiController::class, 'registrasi_radio_berhasil'])->name('registrasi-radio-berhasil');


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
Route::get('/admin-data-user',[HomeController::class,'admin_data_user'])->name('admin-data-user');
Route::get('/admin-data-pasien',[HomeController::class,'admin_data_pasien'])->name('admin-data-pasien');
Route::get('/admin-data-dokter',[HomeController::class,'admin_data_dokter'])->name('admin-data-dokter');
Route::get('/laman-masuk', [HomeController::class,'laman_masuk'])->name('laman-masuk');
Route::get('/create',[HomeController::class,'create'])->name('admin.create');
Route::post('/store',[HomeController::class,'store'])->name('admin.store');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin.edit');
Route::get('/detail/{id}',[HomeController::class,'detail'])->name('admin.detail');
Route::put('/update/{id}',[HomeController::class,'update'])->name('admin.update');  
Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('admin.delete');