<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;



Route::get('/index', function () {
    return view('front_office/home/index');
})->name('index');

Route::get('/update_data', function () {
    return view('front_office/update_data');
})->name('update_data');



Route::get('/product_consult/review_product', function () {
    return view('front_office/home/review_product');
})->name('review_product');


Route::get('/product_consult/delivery_rev', function () {
    return view('front_office/home/delivery_rev');
})->name('review');



Route::get('/product_consult/artisan_rev', function () {
    return view('front_office/home/review_artisan');
})->name('artisan_re');




Route::get('/profile_consult/profile', function () {
    return view('front_office/home/artisanprof');
})->name('profile');


Route::get('/history', function () {
    return view('front_office/history');
})->name('history');

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


Route::get('/Contact', function () {
    return view('front_office/home/contact');
})->name('contact');

