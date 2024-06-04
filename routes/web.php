<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSubServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/registration', [AuthController::class, 'registration']);
    Route::post('/registration', [AuthController::class, 'register']);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    
    Route::get('/laundry/{id}', [LaundryController::class, 'index']);
    Route::get('/pesan/{id}', [PesanController::class, 'index']);
    Route::post('/pesan/{id}', [PesanController::class, 'store']);
    
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/user/edit/{id}', [AdminController::class, 'edit']);
    Route::put('/admin/user/update/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/user/delete/{id}', [AdminController::class, 'destroy']);
    
    Route::get('/admin/service', [AdminServiceController::class, 'create']);
    Route::post('/admin/service', [AdminServiceController::class, 'store']);
    Route::get('/admin/service/edit/{id}', [AdminServiceController::class, 'edit']);
    Route::put('/admin/service/edit/{id}', [AdminServiceController::class, 'update']);
    Route::delete('/admin/service/delete/{id}', [AdminServiceController::class, 'destroy']);
    
    Route::get('/admin/subService', [AdminSubServiceController::class, 'create']);
    Route::post('/admin/subService', [AdminSubServiceController::class, 'store']);
    Route::get('/admin/subService/edit/{id}', [AdminSubServiceController::class, 'edit']);
    Route::put('/admin/subService/edit/{id}', [AdminSubServiceController::class, 'update']);
    Route::delete('/admin/subService/delete/{id}', [AdminSubServiceController::class, 'destroy']);

});

// Route::get('/')

// Route::get('/dry', [DryCon])

