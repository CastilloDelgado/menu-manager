<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\VariantController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ItemController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});



Route::get('/admin', [MenuController::class, 'index'])->name('admin.index');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/menu/{id}', [MenuController::class, 'delete'])->name('menu.delete');
Route::post('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');

Route::post('/menu/{menuId}/section', [SectionController::class, 'store'])->name('section.store');
Route::delete('/section/{id}', [SectionController::class, 'delete'])->name('section.delete');
Route::post('/section/{id}', [SectionController::class, 'update'])->name('section.update');

Route::post('/section/{sectionId}/item', [ItemController::class, 'store'])->name('item.store');
Route::post('/item/{id}', [ItemController::class, 'update'])->name('item.update');
Route::delete('/item/{id}', [ItemController::class, 'delete'])->name('item.delete');

Route::post('/item/{itemId}/variant', [VariantController::class, 'store'])->name('variant.store');
Route::post('/variant/{id}', [VariantController::class, 'update'])->name('variant.update');
Route::delete('/variant/{id}', [VariantController::class, 'delete'])->name('variant.delete');