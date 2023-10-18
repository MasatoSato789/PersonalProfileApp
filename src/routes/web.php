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

Route::get('/test', function () {
    $test = "テスト";
    $debug = "デバッグ";
    $testOfDebug = "${debug}の${test}用です！！！";
    return view('test');
});
