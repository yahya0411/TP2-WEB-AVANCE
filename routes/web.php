<?php

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

Route::get('/', function () {
    return view('front_office/home/index');
})->name('home');



Route::get('/update_data', function () {
    return view('front_office/update_data');
})->name('update_data');



Route::get('/identification', function () {
    return view('front_office/identification');
})->name('formular');


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

