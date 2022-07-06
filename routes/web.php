<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateController;
use App\Http\Controllers\Admin\Category\StoreController;
use App\Http\Controllers\Admin\Category\ShowController;
use App\Http\Controllers\Admin\Category\EditController;
use App\Http\Controllers\Admin\Category\UpdateController;
use App\Http\Controllers\Admin\Category\DeleteController;

Route::group(['namespase'=>'Main'], function(){
Route::get('/', [IndexController::class, 'index'])->name('index');
});

Route::group(['namespase'=>'Admin', 'prefix'=>'admin'], function(){
    Route::group(['namespase'=>'Main'], function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        });
        Route::group(['namespase'=>'Category', 'prefix'=>'categories'], function(){
            Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
            Route::get('/create', [CreateController::class, 'create'])->name('admin.category.create');
            Route::post('/', [StoreController::class, 'store'])->name('admin.category.store');
            Route::get('/{category}', [ShowController::class, 'show'])->name('admin.category.show');
            Route::get('/{category}/edit', [EditController::class, 'edit'])->name('admin.category.edit');
            Route::patch('/{category}', [UpdateController::class, 'update'])->name('admin.category.update');
            Route::delete('/{category}', [DeleteController::class, 'delete'])->name('admin.category.delete');
                });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
