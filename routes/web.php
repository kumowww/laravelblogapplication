<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;

Route::post('/execute', [IndexController::class, 'execute'])->name('index.execute');
Route::post('/system/clear', [IndexController::class, 'clear'])->name('system.clear');

Route::get('/', function () {
    return redirect('/en');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|ru|de']], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    
    Route::get('/posts', function() {
        return view('posts.index');
    })->name('posts.index');
    
    Route::get('/posts/create', function() {
        return "Create Post Page";
    })->name('posts.create');
});