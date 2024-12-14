<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'createCategorie'])->name('categories.createCategorie');
Route::put('/categories/{id}', [CategoryController::class, 'saveEditCategorie'])->name('categoires.saveEditCategorie');
Route::delete('/categories/{id}', [CategoryController::class, 'deleteCategorie'])->name('categories.deleteCategorie');
