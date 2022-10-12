<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;

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
Route::resource('arsip', ArsipController::class);
Route::get('/', [ArsipController::class, 'index']);
Route::get('/arsip/create', [ArsipController::class, 'create']);
Route::get('/arsip/delete/{id}', [ArsipController::class, 'destroy']);
Route::post('/arsip/store', [ArsipController::class, 'store']);
Route::get('/arsip/show/{id}', [ArsipController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});
