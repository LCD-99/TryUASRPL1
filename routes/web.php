<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GazeboController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\User\BookingController as UserBookingController;



Route::get('/', function () {
    return redirect('/login');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::view('/user/schedule', 'user.schedule')->middleware(['auth', 'role:user']);


Route::middleware(['auth'])->group(function () {

    Route::middleware('role:user')->group(function () {
        Route::get('/user/bookings', [UserBookingController::class, 'index'])->name('user.bookings.index');
        Route::get('/user/bookings/create', [UserBookingController::class, 'create'])->name('user.bookings.create');
        Route::post('/user/bookings', [UserBookingController::class, 'store'])->name('user.bookings.store');
    });

    Route::middleware('role:user')->group(function () {
        Route::resource('user/bookings', UserBookingController::class);
    });

    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::resource('gazebos', GazeboController::class);
        Route::resource('bookings', AdminBookingController::class)->only(['index', 'update', 'show']);
    });

    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::resource('gazebos', GazeboController::class);
        Route::resource('bookings', AdminBookingController::class);
    });

    Route::get('/dashboard', function(){
        $role = auth()->user()->role;
        if ($role === 'admin') return redirect('/admin/gazebos');
        return redirect('/user/bookings');
    })->name('dashboard');

    Route::middleware(['auth', 'role:admin'])->group(function () {
        // route admin
    });
    
    //route untuk user
    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::resource('user/bookings', UserBookingController::class)->except(['edit', 'update', 'show']);
    });
    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/user/gazebos', [UserBookingController::class, 'showGazeboSchedule'])->name('user.gazebos.schedule');
    });
    
    

    //route dashboard
    Route::middleware(['auth'])->get('/dashboard', function () {
        $user = auth()->user();
        if ($user->role === 'admin') {
            return view('dashboard.admin');
        } else {
            return view('dashboard.user');
        }
    })->name('dashboard');
    
    
});