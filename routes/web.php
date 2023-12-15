<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pro', function () {
    return view('backoffice.Products.show');
});
Route::get('/register', [AuthController::class ,'register'])->name('register');
Route::post('/register', [AuthController::class ,'registerpost'])->name('register');
Route::get('/login', [AuthController::class ,'login'])->name('login');
Route::post('/login', [AuthController::class ,'loginPost'])->name('login');
Route::post('/login', [AuthController::class ,'logout'])->name('logout');

Route::resource('artisan', ArtisanController::class);
Route::resource('product', ProductController::class);
