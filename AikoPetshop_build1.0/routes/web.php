<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Grooming;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function(){
    return view('index');
});

Route::get('/home', function(){
    return view('index');
});

Route::get('/petgrooming', function(){
    return view('petgroomingpage');
});

Route::get('/pethotel', function(){
    return view('pethotelpage');
});



Route::get('/about', function(){
    return view('about');
});

//Data Grooming routes
Route::get('/admin/datagrooming', [GroomingController::class, 'showall']);

Route::get('/daftargrooming', [GroomingController::class, 'index'])->name('daftargrooming');
Route::post('/daftargrooming', [GroomingController::class, 'store'])->name('grooming.action');

Route::get('/editgrooming/{id}', [GroomingController::class, 'edit']);
Route::post('/editgrooming/{id}', [GroomingController::class, 'update']);

Route::delete('/deletegrooming/{id}', [GroomingController::class, 'destroy']);

//Data Produk routes
Route::get('/products', [ProdukController::class, 'displayall']);

Route::get('/admin/dataproduk', [ProdukController::class, 'showall']);

Route::get('/createproduk', [ProdukController::class, 'index']);
Route::post('/createproduk', [ProdukController::class, 'store']);

Route::get('/editproduk/{id}', [ProdukController::class, 'edit']);
Route::post('/editproduk/{id}', [ProdukController::class, 'update']);

Route::delete('/deleteproduk/{id}', [ProdukController::class, 'destroy']);

//Admin routes
Route::get('/makelogin', [UserController::class, 'make_login']);

Route::get('/loginadmin', [UserController::class, 'index'])->name('loginadmin');
Route::post('/loginadmin', [UserController::class, 'login_action'])->name('login.action');

Route::get('/logoutadmin', [UserController::class, 'logout'])->name('logoutadmin');

Route::get('/admin/dashboard', function(){
    return view('admin.dashboardadmin');
});

Route::get('/admin/databarangjual', function(){
    return view('admin.dashboardadmin');
});