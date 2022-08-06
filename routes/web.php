<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeafoodController;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class, 'home']);
Route::get('/about',[PageController::class, 'about']);
Route::get('/orders',[PageController::class, 'orders']);
Route::get('/reviews',[PageController::class, 'reviews']);

Route::get('/seafood', [SeafoodController::class, 'index']);
