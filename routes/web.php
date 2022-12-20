<?php

use App\Http\Livewire\Product\{ProductCreate, ProductEdit, ProductIndex};
use App\Models\Product;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', ProductIndex::class)->name('index');
        Route::get('/create', ProductCreate::class)->name('create');
        Route::get('/{product}/edit', ProductEdit::class)->name('edit');
        // route get image
        Route::get('/{product}/image', function (Product $product) {
            return response()->file(storage_path('app/public/' . $product->hash_image));
        })->name('image');
    });
});
