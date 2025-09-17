<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController, CustomerController, MenuController, OrderController, PembayaranController};

Route::get("/login", [AdminController::class, 'index'])->name('login');
Route::post("/login/process", [AdminController::class, 'login'])->name('login.process');
    Route::get('/home/menu', [MenuController::class, 'index'])->name('admin.home.menu');
    Route::get('/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu', [MenuController::class, 'store'])->name('admin.menu.store');
    Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('admin.menu.edit');
    Route::put('/menu/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/orders', [AdminOrderController::class,'index'])->name('admin.orders');
Route::post('/admin/orders/{id}/done', [AdminOrderController::class,'done'])->name('admin.orders.done');