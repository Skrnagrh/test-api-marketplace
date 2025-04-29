<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [MarketplaceController::class, 'index'])->name('marketplace.index');
Route::get('/search', [MarketplaceController::class, 'search'])->name('marketplace.search');
