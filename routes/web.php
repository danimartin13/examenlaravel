<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalController;


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

Route::get('/', [CasalController::class, 'index'])->name("index");

// crearcasal
Route::get('/crearcasal', [CasalController::class, 'crearcasal'])->name("crearcasal");

//anadircasal
Route::post('/anadircasal', [CasalController::class, 'anadircasal'])->name("anadircasal");