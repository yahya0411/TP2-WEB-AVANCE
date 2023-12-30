<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsumerController;



Route::get('/index', function () {
    return view('front_office/home/index');
})->name('index');


Route::resource('consommateur',ConsumerController::class);

Route::get('/update', function () {
    return view('front_office/edit');
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


Route::get('/product_consult/cart', function () {
    return view('front_office/home/cart');
})->name('cart');

Route::get('/profile_consult/profile', function () {
    return view('front_office/home/artisanprof');
})->name('profile');

Route::get('/profile_consult/profile', [ArtisanController::class, 'ProfilArtisan'])->name('profile');

Route::get('/history', function () {
    return view('front_office/history');
})->name('history');

Route::get('/identification', function () {
    return view('front_office/identification');
})->name('formular');

Route::get('identification/signup', [UserController::class, 'handleInscription'])->name('identification.signup');
Route::get('identification/signup', [UserController::class, 'handleInscription'])->name('identification.signup');
Route::get('identification/signin',[AuthController::class, 'login'])->name('login');
Route::post('identification/signin',[AuthController::class, 'loginPost'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/aboutt', function () {
    return view('front_office/home/about');
})->name('about');

Route::get('/serivice', function () {
    return view('front_office/home/service');
})->name('serivices');

Route::get('/checkout', function () {
    return view('front_office/home/checkout');
})->name('checkout');

Route::get('/product_consult', function () {
    return view('front_office/home/product_consult');
})->name('product_consult');

Route::get('/product_consult', [ProduitController::class, 'ProductDetails'])->name('product_consult');

Route::get('/product', [ProduitController::class, 'index'])->name('products');

Route::get('/product',[ProduitController::class, 'searchProducts'])->name('products');

Route::get('/product/{sortType?}',[ProduitController::class, 'sortProducts'])->name('products');

Route::get('/Testimonial', [ArtisanController::class, 'index'])->name('testimonial');
Route::get('/Testimonial', [ArtisanController::class, 'searchArtisans'])->name('testimonial');

Route::get('/Team', function () {
    return view('front_office/home/team');
})->name('team');

Route::get('/Testimonial', function () {
    return view('front_office/home/testimonial');
})->name('testimonial');


Route::get('/Contact', function () {
    return view('front_office/home/contact');
})->name('contact');

