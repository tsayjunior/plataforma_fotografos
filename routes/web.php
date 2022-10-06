<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\FotografoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\photographiesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [PhotographyController::class, index]);
// Route::apiResource('eventos', EventoController::class); //para api


// Route::get('/', function () {
//     return view('product');
// });
Route::resource('/', photographiesController::class);
Route::resource('persona', PersonaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/crear_fotografo', [FotografoController::class, 'create}Fotografo'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

// Route::resource('/', CartsController::class);
Route::post('/cart', [CartsController::class, 'store'])->name('cart');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');
Route::get('/checkout/get/items', [CartsController::class, 'getCartIetmsForCheckout']);
Route::post('/process/user/payment', [CartsController::class, 'processPayment']);

