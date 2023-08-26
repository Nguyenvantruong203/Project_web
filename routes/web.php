<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\providerController;

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
    Route::get('product_category/{id}', [ProductController::class, "findByCategory"])->name('product_category');


    // Route::get('/cart', [CartController::class, "index"])->name('cartindex');
    // Route::post('/addcart/{id}', [CartController::class, 'create'])->name('addtocart');



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


    // Route::prefix('/admin')->group(function(){
    //     Route::get('/homeorder', [OrderController::class, 'index'])->name('indexorder');
    //     Route::post('/homeorder', [OrderController ::class, 'store'])->name('createorder');
    // });

    Route::prefix('/admin')->group(function(){
        Route::get('/homecolor', [ColorController::class, 'index'])->name('indexcolor');
        Route::post('/homecolor', [ColorController::class, 'create'])->name('createcolor');
        Route::get('/editcolor/{id}', [ColorController::class, 'edit'])->name('editcolor');
        Route::post('/editcolor/{id}', [ColorController::class, 'update'])->name('updatecolor');
        Route::get('/deletecolor/{id}', [ColorController::class, 'destroy'])->name('deletecolor');


    });
    Route::prefix('/admin')->group(function(){
        Route::get('/homeprovider', [providerController::class, 'index'])->name('indexprovider');
        Route::post('/homeprovider', [providerController::class, 'create'])->name('createprovider');
        Route::get('/editprovider/{id}', [providerController::class, 'edit'])->name('editprovider');
        Route::post('/editprovider/{id}', [providerController::class, 'update'])->name('updateprovider');
        Route::get('/deleteprovider/{id}', [providerController::class, 'destroy'])->name('deleteprovider');

    });
