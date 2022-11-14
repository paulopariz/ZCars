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

use App\Http\Controllers\CarsController;

Route::get('/', [CarsController::class, 'index']);
Route::get('/cars/create', [CarsController::class, 'create'])->middleware('auth') ;
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::post('/cars', [CarsController::class, 'store']);
Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->middleware('auth');
Route::get('/cars/edit/{id}', [CarsController::class, 'edit'])->middleware('auth');
Route::put('/cars/update/{id}', [CarsController::class, 'update'])->middleware('auth');



Route::get('/dashboard', [CarsController::class, 'dashboard'])->middleware('auth');


