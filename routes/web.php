<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected routes by role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.index'));
    // Route::get('/admin/transactions', fn() => view('admin.transactions'));
    Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('admin.transactions');
    Route::get('/admin/inventories', [InventoryController::class, 'index'])->name('admin.inventories');
    Route::get('/admin/cashier', [CashierController::class, 'index'])->name('admin.cashier');
});

Route::middleware(['auth', 'role:cashier'])->group(function () {
    Route::get('/pos', [InventoryController::class, 'cashier'])->name('pos');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
});

Route::get('/', function () {
    return view('signin');
});
