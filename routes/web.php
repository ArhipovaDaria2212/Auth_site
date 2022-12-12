<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;

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
    // Route::get('user/', [UserController::class, 'show']);
    Route::get('/film', [FilmController::class, 'form']);
    Route::get('/result', [FilmController::class, 'result',]);
    Route::get('/login', [FilmController::class, 'login']);
    Route::get('/loginresult', [FilmController::class, 'loginresult']);
    Route::get('/', [FilmController::class, 'main']);


