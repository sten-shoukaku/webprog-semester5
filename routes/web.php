<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventSectionController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

// test

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/signin', [WelcomeController::class, 'signin']);
Route::get('/signup', [WelcomeController::class, 'signup']);

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/editpassword', [UserController::class, 'editpassword']);
Route::post('/profile/editpassword', [UserController::class, 'changepassword']);
Route::get('/profile/editprofile', [UserController::class, 'editprofile']);
Route::post('/profile/editprofile', [UserController::class, 'changeprofile']);

Route::get('/admin/profile', [UserController::class, 'adminprofile']);
Route::get('/admin/profile/editpassword', [UserController::class, 'admineditpassword']);
Route::post('/admin/profile/editpassword', [UserController::class, 'adminchangepassword']);

Route::post('/signin', [WelcomeController::class, 'authentication']);
Route::post('/signup', [WelcomeController::class, 'store']);

Route::post('/logout', [WelcomeController::class, 'logout']);

Route::get('/home', [HomepageController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'event_detail']);
Route::post('/event/{id}/order/{section_id}', [EventSectionController::class, 'order_section']);

Route::get('/admin/home', [HomepageController::class, 'index_admin']);

// Event
// Add event
Route::get('/add/event/', [TicketController::class, 'addEvent']);
Route::post('/add/event/', [TicketController::class, 'addEventDetail']);

// Edit Event
Route::get('/edit/event/{eventId}', [TicketController::class, 'editEvent'])->name('editEvent');

// Remove Event
Route::post('/remove/event/{eventId}', [TicketController::class, 'removeEvent']);

// Section
// Add Section
Route::get('/add/section/{id}', [TicketController::class, 'addSection']);
Route::post('/add/section/{id}', [TicketController::class, 'addSectionDetail']);

// Remove Section
Route::post('/remove/section/{eventId}/{sectionId}', [TicketController::class, 'removeSection']);