<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::get('/profile', );
Route::post('/1', [UserController::class, 'store'])->name('store');
Route::get('/profile/{user}', [UserController::class, 'show'])->name('show');
Route::get('/3', [UserController::class, 'edit']);
Route::get('/4', [UserController::class, 'update']);
Route::get('/5', [UserController::class, 'destroy']);
Route::get('/7', [UserController::class, 'bebra']);

Route::get('/logins', [UserController::class, 'login'])->name('logins');

Route::get('/group/{user}', [UserController::class, 'group'])->name('group');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
