<?php
use App\Http\Controllers\CatController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;
// Registration Routes
Route::prefix('user')->group(function () {
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('userlogin');
Route::post('/login', [LoginController::class, 'login'])->name('userlogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('userlogout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('userregister');
Route::post('/register', [RegisterController::class, 'register'])->name('userregister');
Route::post('/home/{user?}', [RegisterController::class, 'show']);
});

Route::middleware(['auth:web'])->group(function () {
Route::get('user/home', [CatController::class, 'home'])->name('home');

Route::get('user/news', [NewsController::class, 'news'])->name('news');
Route::get('user/product{id?}', [CatController::class, 'showproduct'])->name('product');


Route::post('user/contact', [ContactUSController::class, 'contactstore'])->name('addcontact');


Route::post('admin/home', [CatController::class, 'categorystore'])->name('categorystore');
Route::delete('admin/home{id?}', [CatController::class, 'destroycat'])->name('categorydestroy');

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
Route::post('user/addnews', [NewsController::class, 'addnews'])->name('addnews');
// Route::get('/news', [DatabaseFunctions::class, 'news'])->name('news');
// Route::get('/product{cat_id?}', [DatabaseFunctions::class, 'products'])->name('product');

// Route::get('/api/products', [ApiController::class, 'index']);
// Route::post('/api/products', [ApiController::class, 'store']);
// Route::get('/api/products/{id}', [ApiController::class, 'show']);
// Route::put('/api/products/{id}', [ApiController::class, 'update']);
// Route::delete('/api/products/{id}', [ApiController::class, 'destroy']);
});
