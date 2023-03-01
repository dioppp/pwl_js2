<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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

// Route::get('/', function () {
//     return view('beranda');
// });

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

Route::prefix('product')->group(function () {
    Route::get('/index', [ProductController::class, 'index']);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('programs')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
});

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::resource('contact-us', ContactController::class);


Route::get('/home', [HomeController::class, 'index']);

Route::get('product', [ProductController::class, 'index']);

Route::prefix('product')->group(function($name){
    Route::get('/{name}', [ProductController::class, 'show']);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('programs')->group(function($name){
    Route::get('/{name}', [ProductController::class, 'show']);
});

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::resource('contact-us', ContactController::class);

Route::get('/dashboard', [HomeController::class, 'index']) -> name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']) -> name('profile');

Route::get('/college', [CollegeController::class, 'index']) -> name('college');