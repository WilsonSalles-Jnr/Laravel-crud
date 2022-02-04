<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\LoginController;
Route::get('/', [LoginController::class, 'loginIndex']);


use App\Http\Controllers\UserController;
Route::get('/lista', [UserController::class, 'userList']);

Route::get('/lista/edit/', [UserController::class, 'creationUser'])->middleware('auth');
Route::post('/lista/edit/', [UserController::class, 'store'])->middleware('auth');

Route::get('/lista/edit/{id}', [UserController::class, 'show'])->middleware('auth');
Route::put('/lista/update/{id}', [UserController::class, 'update'])->middleware('auth');

Route::get('lista/delete/{id}', [UserController::class, 'deleteUser'])->middleware('auth');
Route::delete('lista/delete/{id}', [UserController::class, 'destroy'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
