<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;


Route::group(['namespase'=>'Main'], function(){
Route::get('/', [IndexController::class, 'index'])->name('index');
});

Route::group(['namespase'=>'Admin', 'prefix'=>'admin'], function(){
    Route::group(['namespase'=>'Main'], function(){
        Route::get('/', [AdminController::class, 'index'])->name('index.admin');
        });
        Route::group(['namespase'=>'Category', 'prefix'=>'categories'], function(){
            Route::get('/', [CategoryController::class, 'index'])->name('index');
                });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
