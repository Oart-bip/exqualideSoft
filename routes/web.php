<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::resource('produtos', ProductController::class);
Route::resource('clientes', CustomerController::class);
Route::get('pedidos', [OrderController::class, 'index'])->name('pedidos.index');
Route::get('pedidos/novo', [OrderController::class, 'create'])->name('pedidos.create');
Route::post('pedidos', [OrderController::class, 'store'])->name('pedidos.store');
Route::get('fretes', [ShipmentController::class, 'index'])->name('fretes.index');
Route::get('fretes/novo', [ShipmentController::class, 'create'])->name('fretes.create');
Route::post('fretes', [ShipmentController::class, 'store'])->name('fretes.store');
Route::patch('fretes/{shipment}', [ShipmentController::class, 'update'])->name('fretes.update');
