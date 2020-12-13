<?php

use App\Http\Controllers\CreateheroController;
use App\Http\Controllers\MyheroesController;
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
    return view('home');
});

Route::get('/myheroes', [MyheroesController::class, 'index'])->name('myheroes');

Route::get('/myheroes/createhero', [CreateheroController::class, 'index'])->name('createhero');
Route::post('/myheroes/createhero', [CreateheroController::class, 'store']);
