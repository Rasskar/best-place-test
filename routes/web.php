<?php

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

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::post('/category/add', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addCategory');

Route::post('/category/edit', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editCategory');

Route::get('/category/{id}', [App\Http\Controllers\CategoryController::class, 'subCategory'])->name('sub_category');

Route::get('/category/{categoryId}/place', [App\Http\Controllers\PlaceController::class, 'index'])->name('category.place');

Route::post('/place/add', [App\Http\Controllers\PlaceController::class, 'addPlace'])->name('addPlace');

Route::post('/place/edit', [App\Http\Controllers\PlaceController::class, 'editPlace'])->name('editPlace');


