<?php

use App\Http\Livewire\AddUser;
use App\Http\Livewire\ManageUsers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePhotoController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\PostulationsController;
use App\Http\Controllers\RecruiterController;

// ROUTE MAIN
Route::get('/', function () {
    return view('welcome');
});

// ROUTES AUTH
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// USERS
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// ROUTES MANAGE-USERS
Route::get('/manage-users', ManageUsers::class)->name('manage.users');
Route::get('/user/{user}', [ManageUsers::class, 'show'])->name('user.show');
Route::delete('/user/{user}', [ManageUsers::class, 'destroy'])->name('user.destroy');
Route::put('/user/{user}', [ManageUsers::class, 'changeRole'])->name('user.changeRole');
Route::get('/add-user', AddUser::class)->name('add.user');

// ROUTES RESOURCES
Route::resource('/company', CompanyController::class);
Route::resource('/offer', OfferController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/requisition', RequisitionController::class);

// ROUTE POSTULATION
Route::post('/aplication/{user}/{offer}', [PostulationsController::class, 'store'])->name('candidate.postulation');

Route::get('/recruiter', [RecruiterController::class, 'index'])->name('recruiter.index');