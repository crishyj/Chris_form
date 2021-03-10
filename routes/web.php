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
    return view('index');
});

Route::post('/', [App\Http\Controllers\RutController::class, 'rutSingup'])->name('rutSingup');

Route::get('/inscription', [App\Http\Controllers\RutController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [App\Http\Controllers\RutController::class, 'inscriptionStore'])->name('inscriptionStore');
