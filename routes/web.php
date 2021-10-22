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

Route::resource('productos', \App\Http\Controllers\GdsController::class);
//Route::get('productos', [\App\Http\Controllers\GdsController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/productos/index', function () {
    return view('productos/index');
})->name('productos/index');
