<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

// Route::get('/', function () {
//     return view('front-end.home');
// });
    Route::get('/',[ProductController::class,'index'])->name('products.list');

    // Route::get('/admin',[])


    // backend

    Route::get('/admin',[AdminController::class,'login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::post('/admin',[AdminController::class,'loginSuccess']);
    Route::get('/logout',[AdminController::class,'logOut'])->name('admin.logout');
