<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2141720098 - Frisaranda Diouf Julio";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID $id";
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);



Route::get('/index', [EduController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/index', [ProductController::class, 'index']);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('programs')->group(function () {
    Route::get('/index', [ProductController::class, 'index']);
});

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::resource('contact-us', ContactController::class);