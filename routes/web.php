<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return app(DashboardController::class)->index();
    }
    return view('welcome');
})->name('dashboard.index');

//Administrado
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//Rutas del admin
Route::namespace('App\Http\Controllers')->prefix('admin')->group(function(){

    //Articulos
    Route::resource('articles', 'ArticleController')->except('show')->names('articles');
    //commentariios
    Route::resource('comments', 'CommentController')
        ->only(['index', 'destroy']);
   //categorias
    Route::resource('categories', 'CategoryController')
        ->except(['show']);
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/all', [DashboardController::class, 'all'])->name('dashboard.all');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//comentarios
//Route::resource('coments', CommentController::class)
//    ->only(['index', 'destroy']);

Route::resource('articles', ArticleController::class)
    ->except(['show']);

//Route::resource('categories', CategoryController::class)
 //   ->except(['show']);

//ver perfiles
Route::resource('profiles', ProfileController::class)
    ->only(['edit', 'update']);

//ver articulos
Route::get('article/{article}', [ArticleController::class, 'show'])->name('articles.show');

//Ver articulos por categorias
Route::get('category/{category}', [CategoryController::class, 'detail'])->name('categories.detail');

//Guardar comentarios
Route::post('/comment', [CommentCOntroller::class, 'store'])->name('comments.store');

//Articles
//Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
//Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
//Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

//Route::post('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
//Route::post('/articles/{article}', [ArticleController::class, 'update'])->name('article.update');
//Route::post('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

require __DIR__.'/auth.php';

