<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Mechanic\AuthController;
use App\Http\Controllers\Mechanic\HomeController;
use App\Http\Controllers\Mechanic\MechanicController;
use App\Http\Controllers\Mechanic\ProfileController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\User\MechanicController as UserMechanicController;
use App\Http\Controllers\User\profileController as UserProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});

// Mechanic
Route::middleware('auth:mechanic')->prefix('mechanic')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('mechanic.home');
    Route::get('/about', [HomeController::class, 'about'])->name('mechanic.about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('mechanic.contact');
    Route::get('/reviews', [HomeController::class, 'reviews'])->name('mechanic.reviews');
    Route::get('/mechanics', [MechanicController::class, 'index'])->name('mechanic.mechanics');
    Route::post('/search', [MechanicController::class, 'search'])->name('mechanic.search');
    Route::get('/mechanic/{id}', [MechanicController::class, 'show'])->name('mechanic.show');
    Route::get('profile', [ProfileController::class, 'index'])->name('mechanic.profile');
    Route::post('logout-mechanic', [AuthController::class, 'logout'])->name('mechanic.logout');
});

Route::middleware('guest:mechanic')->group(function(){
    Route::get('login-mechanic', [AuthController::class, 'login'])->name('mechanic.login');
    Route::get('register-mechanic', [AuthController::class, 'register'])->name('mechanic.register');
});


// Users
Route::middleware('auth:web')->group(function(){
    Route::get('/', [UserHomeController::class, 'index'])->name('user.home');
    Route::get('/about', [UserHomeController::class, 'about'])->name('user.about');
    Route::get('/contact', [UserHomeController::class, 'contact'])->name('user.contact');
    Route::get('/reviews', [UserHomeController::class, 'reviews'])->name('user.reviews');
    Route::get('/mechanics', [UserMechanicController::class, 'index'])->name('user.mechanics');
    Route::post('/search', [UserMechanicController::class, 'search'])->name('user.search');
    Route::get('/mechanic/{id}', [UserMechanicController::class, 'show'])->name('user.show');
    Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::post('logout', [UserAuthController::class, 'logout'])->name('user.logout');
});

Route::middleware('guest:web')->group(function(){
    Route::get('login', [UserAuthController::class, 'login'])->name('login');
    Route::get('register', [UserAuthController::class, 'register'])->name('register');
});

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/mechanics', [AdminHomeController::class, 'mechanics'])->name('admin.mechanics');
    Route::get('/users', [AdminHomeController::class, 'users'])->name('admin.users');
    Route::get('/reviews', [AdminHomeController::class, 'reviews'])->name('admin.reviews');
});
