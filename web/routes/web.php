<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminItemController;
use App\Http\Controllers\Admin\AdminRentalLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\MypageController;
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

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');

    Route::prefix('categories')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/', [AdminCategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{id}/edit', [AdminCategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/{id}/update', [AdminCategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{id}/delete', [AdminCategoryController::class, 'destroy'])->name('admin.categories.delete');
    });

    Route::prefix('items')->group(function () {
        Route::get('/', [AdminItemController::class, 'index'])->name('admin.items.index');
        Route::get('/create', [AdminItemController::class, 'create'])->name('admin.items.create');
        Route::post('/', [AdminItemController::class, 'store'])->name('admin.items.store');
        Route::get('/{id}/edit', [AdminItemController::class, 'edit'])->name('admin.items.edit');
        Route::post('/{id}/update', [AdminItemController::class, 'update'])->name('admin.items.update');
        Route::delete('/{id}/delete', [AdminItemController::class, 'destroy'])->name('admin.items.delete');
    });

    Route::get('rental_logs', [AdminRentalLogController::class, 'index'])->name('admin.rental_logs.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('items/{id}', [ItemController::class, 'show'])->name('items.show');
    Route::post('items/{id}', [ItemController::class, 'store'])->name('items.store');
    Route::put('items/{id}', [ItemController::class, 'update'])->name('items.update');
    Route::put('itemas/{id}', [ItemController::class, 'return'])->name('items.return');
    Route::get('mypage', [MypageController::class, 'index'])->name('mypage');
    Route::post('mypage/update', [MypageController::class, 'update'])->name('mypage.update');
    Route::get('mypage/logs', [MypageController::class, 'show'])->name('mypage.show');
});

Route::prefix('items_list')->group(function () {
    Route::get('/keyword_search', [ItemListController::class, 'keyword_search'])->name('items_list.keyword_search');
    Route::get('/search/{tag_name}', [ItemListController::class, 'tag_search'])->name('items_list.tag_name');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__ . '/auth.php';
