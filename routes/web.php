<?php

use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/pro', function () {
    return view('backoffice.Products.show');
});
Route::resource('artisan', ArtisanController::class)->middleware('auth');
Route::resource('product', ProductController::class)->middleware('auth');

Route::get('/register', [AuthController::class ,'register'])->name('register');
Route::post('/register', [AuthController::class ,'registerpost'])->name('register');
Route::get('/login', [AuthController::class ,'login'])->name('login');
Route::post('/login', [AuthController::class ,'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class ,'logout'])->name('logout');


/*
Route::get('/identification', function () {
    return view('front_office/identification');
})->name('formular');

Route::get('identification/signup', [UserController::class, 'handleInscription'])->name('identification.signup');


Route::get('/aboutt', function () {
    return view('front_office/home/about');
})->name('about');

Route::get('/serivice', function () {
    return view('front_office/home/service');
})->name('serivices');
Route::get('/product', function () {
    return view('front_office/home/product');
})->name('products');

Route::get('/Team', function () {
    return view('front_office/home/team');
})->name('team');

Route::get('/Testimonial', function () {
    return view('front_office/home/testimonial');
})->name('testimonial');

Route::get('/4044', function () {
    return view('front_office/home/404');
})->name('404');

Route::get('/Contact', function () {
    return view('front_office/home/contact');
})->name('contact')
*/

