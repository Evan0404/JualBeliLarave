<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\tambahController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\saranController;
use App\Http\Controllers\pesanController;
use App\Http\Controllers\orderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// client view
Route::get('/', [indexController::class, 'index']);
Route::get('/produk', [produkController::class, 'index'])->name('tambah');
Route::get('/contact', [saranController::class, 'index'])->name('saran');
Route::post('/contact/insert', [saranController::class, 'insert']);
Route::get('/produk/beli/{nama}', [produkController::class,'modal'])->name('beli');
Route::post('/produk/beli/{nama}/insert', [produkController::class,'insert']);

// admin view
Route::get('/dashboard', [dashboardController::class, 'index'])->name('home');
Route::get('/tambah', [tambahController::class, 'index']);
Route::post('/tambah/insert', [tambahController::class, 'insert']);
Route::get('/pesan', [pesanController::class, 'index']);
Route::get('/orderan', [orderController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
