<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('front_office/home/index');
})->name('home');



Route::get('/tt', function () {
    return view('front_office/layouts/master');
});






Route::get('backoffice/artisans', function () {
    return view('backoffice.Artisans.index');
});

Route::get('/Home', function () {
    return view('front_office/home/index');
})->name('home');

Route::get('/test', function () {
    return view('front_office/master');
});


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
})->name('contact');




