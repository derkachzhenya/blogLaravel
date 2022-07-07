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

use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Post\PostController;


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

                Route::group(['namespase'=>'Tag', 'prefix'=>'tags'], function(){
                    Route::get('/', [TagController::class, 'index'])->name('admin.tag.index');
                    Route::get('/create', [TagController::class, 'create'])->name('admin.tag.create');
                    Route::post('/', [TagController::class, 'store'])->name('admin.tag.store');
                    Route::get('/{tag}', [TagController::class, 'show'])->name('admin.tag.show');
                    Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('admin.tag.edit');
                    Route::patch('/{tag}', [TagController::class, 'update'])->name('admin.tag.update');
                    Route::delete('/{tag}', [TagController::class, 'delete'])->name('admin.tag.delete');
                        });

                        Route::group(['namespase'=>'Post', 'prefix'=>'posts'], function(){
                            Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
                            Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
                            Route::post('/', [PostController::class, 'store'])->name('admin.post.store');
                            Route::get('/{post}', [PostController::class, 'show'])->name('admin.post.show');
                            Route::get('/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
                            Route::patch('/{post}', [PostController::class, 'update'])->name('admin.post.update');
                            Route::delete('/{post}', [PostController::class, 'delete'])->name('admin.post.delete');
                                });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
