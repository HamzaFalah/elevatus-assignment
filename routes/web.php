<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HammingController;
use App\Http\Controllers\LevenshteinController;

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
    return view('calc-distance');
});

Auth::routes();

Route::post('/getHammingDistance', [HammingController::class, 'index'])->name('getHammingDistance');
Route::post('/getLevenshteinDistance', [LevenshteinController::class, 'index'])->name('getLevenshteinDistance');
