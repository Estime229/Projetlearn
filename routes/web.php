<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriesControllers;
use App\Http\Controllers\index;


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
Route::get('/index', [ categoriesControllers::class , 'index' ])->name('index');
Route::get('/contact', [ categoriesControllers::class , 'contact' ])->name('contact');
Route::get('/cart', [ categoriesControllers::class , 'cart' ])->name('cart');
Route::get('/checkout', [ categoriesControllers::class , 'checkout' ])->name('checkout');
Route::get('/detail', [ categoriesControllers::class , 'detail' ])->name('detail');
Route::get('/shop', [ categoriesControllers::class , 'cart' ])->name('shop');
Route::get('/commerce', [ categoriesControllers::class , 'commerce' ])->name('commerce');
Route::get('/com', [ categoriesControllers::class , 'com' ])->name('com');
Route::get('/ecom', [ categoriesControllers::class , 'ecom' ])->name('ecom');
Route::get('/entrep', [ categoriesControllers::class , 'entrep' ])->name('entrep');
Route::get('/presentiel', [ categoriesControllers::class , 'presentiel' ])->name('presentiel');
Route::get('/vitrier', [ categoriesControllers::class , 'vitrier' ])->name('vitrier');
Route::get('/menuiserie', [ categoriesControllers::class , 'menuiserie' ])->name('menuiserie');
Route::get('/beatmaker', [ categoriesControllers::class , 'beatmaker' ])->name('beatmaker');
Route::get('/mecanicien', [ categoriesControllers::class , 'mecanicien' ])->name('mecanicien');
Route::get('/graphisme', [ categoriesControllers::class , 'graphisme' ])->name('graphisme');
Route::get('/couture', [ categoriesControllers::class , 'couture' ])->name('couture');
Route::get('/manequin', [ categoriesControllers::class , 'manequin' ])->name('manequin');
Route::get('/formateur', [ categoriesControllers::class , 'formateur' ])->name('formateur');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
