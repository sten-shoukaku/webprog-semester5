<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/signin', [WelcomeController::class, 'signin']);
Route::get('/signup', [WelcomeController::class, 'signup']);

Route::post('/signin', [WelcomeController::class, 'authentication']);
Route::post('/signup', [WelcomeController::class, 'store']);

Route::get('/home', function () {
    return view('homepage');
});
