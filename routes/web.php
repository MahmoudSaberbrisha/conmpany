<?php
<<<<<<< HEAD
use App\Http\Controllers\Auth\UserAuthController;

use Illuminate\Support\Facades\Route;
// Registration Routes
Route::prefix('user')->group(function () {
    Route::get('login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
    Route::post('login', [UserAuthController::class, 'login']);
    Route::post('logout', [UserAuthController::class, 'logout'])->name('user.logout');
});

Route::middleware(['auth:web'])->group(function () {
    Route::get('user/dashboard', function () {
        return view('user.dashboard');
 });
});
=======

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactUSController;
use Illuminate\Routing\Router;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\Categories\DatabaseFunctions;
use App\Http\Controllers\DataBaseFun as ControllersDataBaseFun;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\UserController; // Correct namespace for UserController
use App\Http\Middleware\CheckEmailMiddleware; // Import CheckEmailMiddleware
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

// Registration Routes

Route::middleware(['user'])->group(function () {
    Route::get('user/home', [CatController::class, 'home'])->name('home');

    Route::get('user/news', [NewsController::class, 'news'])->name('news');
    Route::get('user/product{id?}', [CatController::class, 'showproduct'])->name('product');


    Route::post('user/contact', [ContactUSController::class, 'contactstore'])->name('addcontact');

    Route::get('user/about', function () {
        return view('layouts.pages.about');
    })->name('about');


    Route::get('user/pages', function () {
        return view('layouts.pages.pages');
    })->name('pages');

    // Route::get('user/product{cat_id?}', [DatabaseFunctions::class, 'products'])->name('product');
    Route::get('user/contact', function () {
        return view('layouts.pages.contact');
    })->name('contact');

    Route::get('user/404', function () {
        return view('layouts.errorpage.404');
    })->name('404');

    Route::get('user/cart', [CatController::class, 'catcard'])->name('cart');
});

#finsh
Route::get('user/register', [RegisterController::class, 'showRegistrationForm'])->name('userregister');
Route::post('user/register', [RegisterController::class, 'register'])->name('userregister');
Route::post('user/home/{user?}', [RegisterController::class, 'show']);

Route::get('user/login', [LoginController::class, 'showLoginForm'])->name('userlogin');
Route::post('user/login', [LoginController::class, 'login']);
Route::post('user/logout', [LoginController::class, 'logout'])->name('userlogout');




Route::post('user/addnews', [NewsController::class, 'addnews'])->name('addnews');
// Route::get('/news', [DatabaseFunctions::class, 'news'])->name('news');
// Route::get('/product{cat_id?}', [DatabaseFunctions::class, 'products'])->name('product');

// Route::get('/api/products', [ApiController::class, 'index']);
// Route::post('/api/products', [ApiController::class, 'store']);
// Route::get('/api/products/{id}', [ApiController::class, 'show']);
// Route::put('/api/products/{id}', [ApiController::class, 'update']);
// Route::delete('/api/products/{id}', [ApiController::class, 'destroy']);
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6
