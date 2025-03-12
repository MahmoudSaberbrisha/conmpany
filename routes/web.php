<?php
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
