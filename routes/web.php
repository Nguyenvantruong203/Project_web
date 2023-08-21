<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDetailController;


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
Route::get('/cart', function () {
    return view('home.cart');
});
Route::get('/about', function () {
    return view('home.aboutme');
});
    Route::get('/home', [ProductController::class, "index"]);
    Route::get('/product', [ProductController::class, "index"])->name('index');
    Route::get('product_detail/{id}', [ProductController::class, "show"])->name('product_detail');

    Route::get('/cart', [CartController::class, "index"])->name('cartindex');
    // Route::post('/cart/{id}', [CartController::class, 'create'])->name('createcart');



    Route::prefix('/admin')->group(function(){
        Route::get('/home', [AdminController::class, 'index'])->name('adminindex');
        Route::post('/home', [AdminController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [AdminController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');
    });

    Route::prefix('/admin')->group(function(){
        Route::get('/homecategory', [CategoryController::class, 'index'])->name('indexcategory');
        Route::post('/homecategory', [CategoryController::class, 'create'])->name('createcategory');
        Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
        Route::post('/editcategory/{id}', [CategoryController::class, 'update'])->name('updatecategory');
        Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('deletecategory');
    });

    Route::prefix('/admin')->group(function(){
        Route::get('/homedetail', [ProductDetailController::class, 'index'])->name('indexdetail');
        Route::post('/homedetail', [ProductDetailController::class, 'create'])->name('createdetail');
        Route::get('/editdetail/{id}', [ProductDetailController::class, 'edit'])->name('editdetail');
        Route::post('/editdetail/{id}', [ProductDetailController::class, 'update'])->name('updatedetail');
        Route::get('/deletedetail/{id}', [ProductDetailController::class, 'destroy'])->name('deletedetail');
    });

    Route::prefix('/admin')->group(function(){
        Route::get('/homeorder', [OrderController::class, 'index'])->name('indexorder');
        Route::post('/homeorder', [OrderController ::class, 'store'])->name('createorder');

    });



