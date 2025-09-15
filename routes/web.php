<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController, CustomerController, MenuController, OrderController, PembayaranController};

Route::get("/login", [AdminController::class, 'index'])->name('login');
Route::post("/login/process", [AdminController::class, 'login'])->name('login.process');
Route::post("/menu", [MenuController::class, 'home'])->name('menu');
Route::get("/admin/menu", [MenuController::class, 'index'])->name('admin.menu');