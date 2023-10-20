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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
Route::patch('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
Route::patch('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/test', function () {
    $test = "テスト";
    $debug = "デバッグ";
    $testOfDebug = "${debug}の${test}用です！！！";
    return view('test');
});
