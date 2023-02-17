<?php

use App\Http\Controllers\TiposController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CategoriasController;

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

Route::resource('/home', HomeController::class);

Route::resource('/produtos', ProdutosController::class);

Route::get('/{slug}', [TiposController::class, 'index'])->name('filter.index');

Route::get('categoria/{slug}', [CategoriasController::class,'index']);
