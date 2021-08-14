<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/',[ProductController::class,'index']);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::get('/dashboard',[ProductController::class,'index']);
Route::get('/produto/cadastro',[ProductController::class,'create']);
Route::post('/produto',[ProductController::class,'store']);