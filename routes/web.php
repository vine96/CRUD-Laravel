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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [RegisterController::class, 'index']);
Route::get('/register/create', [RegisterController::class, 'create']);

Route::get('/lista/{id?}', function ($id = null) {
    return view('lista', ['id' => $id]);
});

