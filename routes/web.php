<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderSummaryController;
use App\Livewire\ArticleDetail;
use App\Livewire\ArticleList;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\LoginForm;
use App\Livewire\ProductDetail;
use App\Livewire\ProductList;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/product', ProductList::class)->name('product.list');
Route::get('/product/{product:slug}', ProductDetail::class)->name('product.detail');
Route::view('/about', 'about')->name('about');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/article', ArticleList::class)->name('article.list');
Route::get('/article/{article:slug}', ArticleDetail::class)->name('article.detail');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('login', LoginForm::class)->name('login');
Route::get('logout', function() {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::get('/order-summary/{order:id}', OrderSummaryController::class)->name('order-summary');
});
