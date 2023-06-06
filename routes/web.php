<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleModelController;
use App\Http\Controllers\ArticleUploadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\HobiModelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaModelController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaMatakuliahController;
use App\Http\Controllers\MatkulModelController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Models\ArticleModel;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    // Route::get('/about', function () {
    //     echo "2141720098 - Frisaranda Diouf Julio";
    // });
    
    // Route::get('/articles/{id}', function ($id) {
    //     echo "Halaman Artikel dengan ID $id";
    // });
    
    // Route::get('/', [HomeController::class, 'index']);
    
    // Route::get('/about', [AboutController::class, 'about']);
    
    // Route::get('/articles/{id}', [ArticleController::class, 'articles']);
    
    // Route::get('/index', [EduController::class, 'index']);
    
    // Route::prefix('product')->group(function () {
    //     Route::get('/index', [ProductController::class, 'index']);
    // });
    
    // Route::get('/news', [NewsController::class, 'index']);
    // Route::get('/news/{id}', [NewsController::class, 'news']);
    
    // Route::prefix('programs')->group(function () {
    //     Route::get('/', [ProgramController::class, 'index']);
    // });
    
    // Route::get('/about-us', [AboutUsController::class, 'index']);
    
    // Route::resource('contact-us', ContactController::class);
    
    // Route::get('/home', [HomeController::class, 'index']);
    
    // Route::get('product', [ProductController::class, 'index']);
    
    // Route::prefix('product')->group(function($name){
    //     Route::get('/{name}', [ProductController::class, 'show']);
    // });
    
    // Route::get('/news', [NewsController::class, 'index']);
    // Route::get('/news/{id}', [NewsController::class, 'news']);
    
    // Route::prefix('programs')->group(function($name){
    //     Route::get('/{name}', [ProductController::class, 'show']);
    // });
    
    // Route::get('/about-us', [AboutUsController::class, 'index']);
    
    // Route::resource('contact-us', ContactController::class);
    
    Route::get('/', [HomeController::class, 'index']);
    
    Route::get('/dashboard', [HomeController::class, 'index']) -> name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'index']) -> name('profile');
    
    Route::get('/college', [CollegeController::class, 'index']) -> name('college');
    
    Route::get('/article', [ArticleModelController::class, 'index']) -> name('article');
    
    Route::resource('/keluarga', KeluargaModelController::class);
    
    Route::resource('/matkul', MatkulModelController::class);

    Route::resource('/hobi', HobiModelController::class);

    Route::resource('/mahasiswa', MahasiswaController::class);
    
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);
    
    Route::get('/khs/{ah}', [MahasiswaMatakuliahController::class, 'show']) -> name('mahasiswa.khs');
    
    Route::resource('articles', ArticleUploadController::class);
    
    Route::get('/article/cetak_pdf', [ArticleUploadController::class, 'cetak_pdf']);
    
    Route::get('/mahasiswa/{id}/khs_pdf', [MahasiswaController::class, 'export']);
});