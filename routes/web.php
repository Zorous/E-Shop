<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SousFamilleController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,"index"]);
Route::get('/famille/{fid}/sous_famille/{sid}',[ClientController::class,"sous_familles_articles"]);
Route::get('/Famille/{id}',[ClientController::class,"familles_sousfamille"]);
Route::get('/familles_view',[ClientController::class,"familles_view"]);


Route::get('add-to-cart/{id}',[CartController::class,"addToCart"])->name('add_to_cart');
Route::get('cart',[CartController::class,"cart"])->name('cart');
Route::delete('remove_from_cart',[CartController::class,"remove"])->name('remove_from_cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('familles',FamilleController::class);
    Route::resource('sous-familles',SousFamilleController::class);
    Route::resource('articles',ArticleController::class);
});











require __DIR__ . '/auth.php';
