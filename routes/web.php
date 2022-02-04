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

Route::get('/lista/edit/', [UserController::class, 'creationUser']);
Route::post('/lista/edit/', [UserController::class, 'store']);
Route::get('/lista/edit/{id}', [UserController::class, 'show']);
Route::put('/lista/update/{id}', [UserController::class, 'update']);
Route::get('lista/delete/{id}', [UserController::class, 'deleteUser']);