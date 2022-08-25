<?php

use App\Http\Controllers\ItemForSaleController;
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

Route::get('item_for_sale/own', [ItemForSaleController::class, 'indexOwn'])->name('item_for_sale.own');
Route::get('item_for_sale/search', [ItemForSaleController::class, 'search'])->name('item_for_sale.search');
Route::resource('item_for_sale', ItemForSaleController::class);

Route::get('/', function () {
    return redirect()->route('item_for_sale.index');
})->name('/');

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
