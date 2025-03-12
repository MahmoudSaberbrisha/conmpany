<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('adminlogin');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('adminlogout');


    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('adminregister');
    Route::post('register', [RegisterController::class, 'register'])->name('adminregister');
    Route::post('home/{admin?}', [RegisterController::class, 'show']);
});

Route::middleware(['auth:admin'])->group(function () {
    // Route::get('admin/dashboard', function () {
    //     return view('admin.dashboard');
    // });
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('admin/settings', [AdminController::class, 'settings']);
Route::get('admin/home', [CatController::class, 'home'])->name('home');

Route::get('admin/news', [NewsController::class, 'news'])->name('news');
Route::post('admin/news', [NewsController::class, 'addnews'])->name('addnews');

Route::get('admin/contact', [ContactUSController::class, 'contactget']);

Route::delete('admin/contact{id?}', [ContactUSController::class, 'destroycontact'])->name('contactdestroy');

Route::get('admin/product{id?}', [CatController::class, 'show'])->name('product');
Route::post('admin/product', [CatController::class, 'addProduct'])->name('addProduct');
Route::put('admin/product{id?}', [CatController::class, 'update'])->name('product');
Route::delete('admin/product{id?}', [CatController::class, 'destroy'])->name('product.destroy');

Route::post('admin/home', [CatController::class, 'categorystore'])->name('categorystore');
Route::delete('admin/home{id?}', [CatController::class, 'destroycat'])->name('categorydestroy');

Route::get('admin/about', function () {
return view('layouts.pages.about');
})->name('about');

Route::get('admin/cart', [CatController::class, 'catcard'])->name('cart');



Route::get('admin/404', function () {
return view('layouts.errorpage.404');
})->name('404');
});