<?php

use App\Http\Controllers\Serendi\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Serendi\PWDController;
use App\Http\Controllers\Serendi\UserController;

Route::get('/', function () {
    return view('components.main');
})->name('main');

Route::get('/adminAuth', function () {
    return view('adminside.adminAuth');
})->name('adminAuth');

Route::get('/home', function () {
    return view('components.main');
})->name('main');

Route::get('/about', function () {
    return view('components.about');
})->name('about');

Route::get('/menu', function () {
    $products = DB::table('product_items')->get();
    return view('components.menu', compact('products'));
})->name('menu');

Route::get('/reviews', function () {
    return view('components.reviews');
})->name('reviews');

Route::get('/forPWD', function () {
    return view('components.forPWD');
})->name('forPWD');

Route::get('/contact', function () {
    return view('components.contact');
})->name('contact');

Route::get('/product/{id}', function($id) {
    $product = DB::table('product_items')->where('id', $id)->first();
    return view('components.ProductPage', compact('product'));
})->name('ProductPage');

Route::get('/ProductPage/id',[UserController::class, 'getEachProduct']);



//Admin Auth Side
    Route::post('/admin/register', [AdminController::class , 'register'])->name('admin.register');
    Route::post('/admin/login', [AdminController::class , 'login'])->name('admin.login');



// PWD Registration Route// ... existing routes ...
Route::middleware(['auth'])->group(function () {
    Route::post('/pwd/store', [PWDController::class, 'store'])->name('pwd.store');
    // Route::get('/pwd/{pwdRegistration}', [PWDController::class, 'show'])->name('pwd.show');
});