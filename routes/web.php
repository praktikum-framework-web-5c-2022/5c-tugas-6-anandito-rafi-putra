<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TypeController;
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
    return view('welcome');
});

Route::prefix('type')->group(function(){
    Route::get('/', [TypeController::class,'index'])->name('types.index');
    Route::get('/create', [TypeController::class,'create'])->name('types.create');
    Route::get('/createproduct', [TypeController::class,'createproduct'])->name('types.createproduct');
    Route::post('/store', [TypeController::class,'store'])->name('types.store');
    Route::post('/storeproduct', [TypeController::class,'storeproduct'])->name('types.storeproduct');
    Route::delete('/type/{id}/delete', [TypeController::class, 'destroy'])->name('types.destroy');
});

Route::prefix('produk')->group(function(){
    Route::get('/{type}', [ProdukController::class,'index'])->name('produks.index');
    Route::get('/edit/{id}', [ProdukController::class,'edit'])->name('produks.edit');
    Route::put('/update/{id}', [ProdukController::class,'updateproduct'])->name('produks.updateproduct');
    Route::delete('/produk/{id}/delete', [ProdukController::class,'destroy'])->name('produks.destroy');
});