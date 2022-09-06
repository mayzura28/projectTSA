<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'show']);

Route::get('/home', [HomeController2::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/{id}', [ProductsController::class, 'index']);
});

Route::get('/news/{id?}', [NewsController::class, 'show']);

Route::prefix('program')->group(function(){
    Route::get('/{id}', [ProgramController::class, 'show']);
});

Route::get('/aboutus', [AboutUsController::class, 'index']);

Route::resource('/contactus', ContactUsController::class);