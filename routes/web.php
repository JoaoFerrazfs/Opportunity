<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\http\Controllers\BuyController;
use App\Models\Product;
use App\Models\ClientBuy;

Route::get('/',[ProductController::class,'index']);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::get('/dashboard',[ProductController::class,'report'])->middleware('auth');
Route::get('/produto/cadastro',[ProductController::class,'create'])->middleware('auth');
Route::post('/produto',[ProductController::class,'store'])->middleware('auth');
Route::get('/produto/{id}',[ProductController::class,'show'])->middleware('auth');
Route::post('/cliente',[ProductController::class,'trolley']);
Route::get('/gerenciarprodutos',[ProductController::class,'indexProduct'])->middleware('auth');
Route::post('/compra',[BuyController::class,'store']);
Route::get('/consultapedido',[BuyController::class,'show']);
Route::delete('/produto/{id}',[ProductController::class,'destroy'])->middleware('auth');
Route::put('/produto/atualizar/{id}',[ProductController::class,'update'])->middleware('auth');



