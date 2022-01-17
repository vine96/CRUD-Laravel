<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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


Route::get('/', [RegisterController::class, 'index']);
Route::get('/registers/create', [RegisterController::class, 'create'])->middleware('auth');
Route::get('/registers/{id}', [RegisterController::class, 'show']);
Route::post('/registers', [RegisterController::class, 'store']);
Route::delete('/registers/{id}', [RegisterController::class, 'destroy']);
Route::get('/dashboard', [RegisterController::class, 'dashboard'])->middleware('auth');



