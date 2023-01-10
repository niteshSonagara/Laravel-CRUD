<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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


Route::get('/', [CategoriesController::class, 'index']);
Route::get('/category-create', [CategoriesController::class, 'create']);
Route::post('/category-store', [CategoriesController::class, 'store']);
Route::get('/category-edit/{id}', [CategoriesController::class, 'edit']);
Route::PUT('/category-update/{id}', [CategoriesController::class, 'update']);
// Route::get('/category-delete/{id}', [CategoriesController::class, 'destroy']); 
Route::DELETE('/category-delete/{id}', [CategoriesController::class, 'destroy']); 
