<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\CarItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('public');

Route::resource('shopping-cart', CarItemsController::class)->names('shopping-cart');
Route::resource('products', ProductsController::class)->names('products');

Route::get('/product/{product:slug}', [ProductController::class, 'view'])->name('product.view');


Route::prefix('/cart')->name('cart.')->group(function () {
    Route::get('/', [CarItemsController::class, 'index'])->name('index');
    Route::get('/get', [CarItemsController::class, 'getCarItems'])->name('getCarItems');
    Route::post('/add/{product:slug}', [CarItemsController::class, 'add'])->name('add');
    Route::post('/remove/{product:slug}', [CarItemsController::class, 'remove'])->name('remove');
    Route::post('/update-quantity/{product:slug}', [CarItemsController::class, 'updateQuantity'])->name('update-quantity');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
