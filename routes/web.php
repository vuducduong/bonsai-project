<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryParentController;
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
    // category
    Route::get('/category',[CategoryParentController::class,'index'])->name('category-parent.list');
    Route::get('/category/add',[CategoryParentController::class,'create'])->name('category-parent.create');
    Route::post('/category/add',[CategoryParentController::class,'store'])->name('category-parent.store');
    

//category horizontal 
    Route::get('/display/{id}',[CategoryParentController::class,'display'])->name('category-parent.display');
    Route::get('/hide/{id}',[CategoryParentController::class,'hide'])->name('category-parent.hide');
    Route::get('/display/vertical/{id}',[CategoryParentController::class,'displayVertical'])->name('category-parent.displayVertical');
    Route::get('/hide/vertical/{id}',[CategoryParentController::class,'hideVertical'])->name('category-parent.hideVertical');



    Route::get('/admin',[AdminController::class,'login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::post('/admin',[AdminController::class,'loginSuccess']);
    Route::get('/logout',[AdminController::class,'logOut'])->name('admin.logout');
