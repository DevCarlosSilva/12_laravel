<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ReportsController;

Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
// Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::resource('users', UserController::class);

// test

Route::resource('items', ItemsController::class);
Route::resource('reports', ReportsController::class);
Route::get('/adminPanel', [AdminPanelController::class, 'index'])->name('adminPanel');
Route::resource('categories', CategoriesController::class);
Route::resource('locations', LocationsController::class);
