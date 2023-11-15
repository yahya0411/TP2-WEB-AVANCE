<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

use App\Http\Controllers\ConsommateurController;
use App\Models\User;

Route::group(['prefix' => 'backoffice/Consommateurs'], function () {
    

    // Route to show the inscription form
    Route::get('inscription', [UserController::class, 'showInscriptionForm'])->name('consommateur.inscription.form');

    // Route to handle the inscription form submission
    Route::post('inscription', [UserController::class, 'handleInscription'])->name('consommateur.inscription.handle');

});




Route::get('backoffice/artisans', function () {
    return view('backoffice.Artisans.index');
});

