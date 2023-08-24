<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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



Route::prefix('/admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('adminindex');
    Route::post('/home', [AdminController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');
});

// route admin quản lý category
Route::prefix('/admin')->group(function () {
    Route::get('/homecategory', [CategoryController::class, 'index'])->name('indexcategory'); // hiển thị list category(có method là index ở trong controller)
    Route::post('/homecategory', [CategoryController::class, 'create'])->name('createcategory'); // thêm category
    Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory'); // lấy dữ liệu id rồi trả ra view editcategory
    Route::post('/editcategory/{id}', [CategoryController::class, 'update'])->name('updatecategory'); // cập nhật lại vào trang home
    Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('deletecategory'); // xoá sản phẩm
});

// route login and register
route::get('/login', [AuthController::class, 'formLogin'])->name('login'); // không xử lý return ở đây nữa mà xử lí trong controller
// B1: khi bấm vào url login thì phương thức formLogin sẽ được gọi ra


Route::get('/registration', [AuthController::class, 'registration'])->name('register');
