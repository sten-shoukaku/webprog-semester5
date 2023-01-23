<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventSectionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
<<<<<<< Updated upstream
use App\Http\Controllers\TicketController;
=======
use App\Http\Controllers\UserController;
>>>>>>> Stashed changes

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
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/editpassword', [UserController::class, 'editpassword']);
Route::get('/profile/editprofile', [UserController::class, 'editprofile']);

Route::post('/signin', [WelcomeController::class, 'authentication']);
Route::post('/signup', [WelcomeController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/home', [HomepageController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'event_detail']);
Route::post('/event/{id}/order/{section_id}', [EventSectionController::class, 'order_section']);

Route::get('/admin/home', [HomepageController::class, 'index_admin']);

Route::get('/edit/event', [TicketController::class, 'edit']);
Route::get('/add/event', [TicketController::class, 'addevent']);
Route::get('/add/section', [TicketController::class, 'addsection']);