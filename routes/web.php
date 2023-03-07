<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/',HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/Servicios",[HomeController::class,"servicios"]);
//Route::get("/Resultados",[HomeController::class,"resultados"]);
Route::get('/shop', [HomeController::class,"shop"]);
Route::get('/about', [HomeController::class,"about"]);
Route::get('/checkout', [HomeController::class,"checkout"]);
Route::get('/shop_single/{id}', [HomeController::class,"shop_single"])->name('shop_single');
Route::get('/pqrs', [HomeController::class,"pqrs"]);
Route::get('/mision-vision', [HomeController::class,"mision_vision"]);
Route::get('/servicios', [HomeController::class,"servicio"]);
Route::get('/info', [HomeController::class,"info"]);





Route::resource('articulos',ArticuloController::class);
Route::resource('categorias',CategoriaController::class);


Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

Route::get('contacto',[ContactUsController::class,"contactUs"]);


Route::post('contactUsPost',[ContactUsController::class,'contactUsPost'])->name('contactUs.contactUsPost');

    
    