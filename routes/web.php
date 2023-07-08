<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, '__invoke']);

Route::get('/products', [CategoryController::class, 'index']);
Route::get('/products/{slug}', [CategoryController::class, 'show']);

Route::get('/blog', [BlogController::class, '__invoke']);

Route::view('/about', view:'site.about.index'); //Static page

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);





?>