<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoriqueCommandeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LivreurController;


Route::get('/', function () {
    return view('front_office/home/index');
})->name('home');



Route::get('/tt', function () {
    return view('front_office/layouts/master');
});





Route::resource('consommateur',ConsumerController::class);


Route::get('/update', function () {
    return view('front_office/edit');
})->name('update_data');

Route::get('/product_consult/review_product', function () {
    return view('front_office/home/review_product');
})->name('review_product');

Route::post('/product_consult/review_product', [EvaluationController::class, 'ProductSendReview'])->name('review_prod_send');


Route::get('/set_review_id/{id_livreur}', [EvaluationController::class, 'setReviewId'])->name('set_review_id');

Route::get('/product_consult/delivery_rev', function () {
    return view('front_office/home/delivery_rev');
})->name('review');

Route::post('/product_consult/delivery_rev', [EvaluationController::class, 'DeliverySendReview'])->name('review_delivery_send');


Route::get('/product_consult/artisan_rev', function () {
    return view('front_office/home/review_artisan');
})->name('artisan_re');

Route::post('/product_consult/artisan_rev', [EvaluationController::class, 'ArtisanSendReview'])->name('review_artisan_send');

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

Route::get('/history', [HistoriqueCommandeController::class, 'order_history'])->name('history');


Route::get('/pro', function () {
    return view('backoffice.Products.show');
});
Route::resource('artisan', ArtisanController::class);
Route::resource('livreur', LivreurController::class);
Route::resource('productt', ProductController::class);
Route::resource('mycommand', CommandeController::class);

Route::get('/command_artisan',[CommandeController::class,'commandsArtisan'])->name('command_artisan');
Route::get('/command_livreur',[CommandeController::class,'commandsLivreur'])->name('command_livreur');
Route::get('/editli',[CommandeController::class,'editli'])->name('editli');

//Route::get('/command_artisan_detail',[CommandeController::class,'edit'])->name('command_artisan_detail');

Route::get('/register', [AuthController::class ,'register'])->name('register');
Route::post('/register', [AuthController::class ,'registerpost'])->name('register');
Route::get('/login', [AuthController::class ,'login'])->name('login');
Route::post('/login', [AuthController::class ,'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class ,'logout'])->name('logout');

Route::get('/aboutt', function () {
    return view('front_office/home/about');
})->name('about');

Route::get('/identification', function () {
    return view('front_office/identification');
})->name('formular');

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

Route::get('/checkout',[CommandeController::class ,'show_data_cart'])->name('checkout');

Route::post('/checkout',[CommandeController::class ,'send_order'])->name('send_order');

Route::get('/product_consult', function () {
    return view('front_office/home/product_consult');
})->name('product_consult');

Route::get('/product_consult', [ProduitController::class, 'ProductDetails'])->name('product_consult');

Route::get('/product', function () {
    return view('front_office/home/product');
})->name('product');

Route::get('/product', [ProduitController::class, 'index'])->name('products');

/*Route::get('/product',[ProduitController::class, 'searchProducts'])->name('products');

Route::get('/product/{sortType?}',[ProduitController::class, 'sortProducts'])->name('products');*/


/*Route::get('/Testimonial', function () {
    return view('front_office/home/testimonial');
})->name('testimonial');*/

Route::get('/Testimonial', [ArtisanController::class, 'index'])->name('testimonial');

Route::get('/Testimonial', [ArtisanController::class, 'searchArtisans'])->name('testimonial');



Route::get('/update_data', function () {
    return view('front_office/update_data');
})->name('update_data');
/*Route::get('/product', function () {
    return view('front_office/home/product');
})->name('products');*/

Route::get('/Team', function () {
    return view('front_office/home/team');
})->name('team');



Route::get('/4044', function () {
    return view('front_office/home/404');
})->name('404');

Route::get('/Contact', function () {
    return view('front_office/home/contact');
})->name('contact');


Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart_form');



