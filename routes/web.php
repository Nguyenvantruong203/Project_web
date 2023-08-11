<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/home', function () {
    return view('home.home');
});
Route::get('/cart', function () {
    return view('home.cart');
});
Route::get('/about', function () {
    return view('home.aboutme');
});
Route::get('/admin', function () {
    return view('home.admin');
});
Route::get('/home', [ProductController::class, "index"]);
// Route::prefix('customer')->group(function(){
    Route::get('/product', [ProductController::class, "index"])->name('index');

    Route::get('product_detail/{id}', [ProductController::class, "show"])->name('product_detail');
// });

route::get('addcart/{id}', [ProductController::class, 'addcart'])->name('addtocart');
route::get('showcart', [ProductController::class, 'showcart'])->name('showcart');


