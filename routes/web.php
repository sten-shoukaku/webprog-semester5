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

// Index
Route::get('/', [WelcomeController::class, 'index']);

// Sign In
Route::get('/signin', [WelcomeController::class, 'signin']);
Route::post('/signin', [WelcomeController::class, 'authentication']);

//Sign Up
Route::get('/signup', [WelcomeController::class, 'signup']);
Route::post('/signup', [WelcomeController::class, 'store']);

// Profile
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/editpassword', [UserController::class, 'editpassword']);
Route::get('/profile/editprofile', [UserController::class, 'editprofile']);

// Logout
Route::post('/logout', [WelcomeController::class, 'logout']);


// USER
Route::get('/home', [HomepageController::class, 'index']);

// Event
Route::get('/event/{id}', [EventController::class, 'event_detail']);
Route::post('/event/{id}/order/{section_id}', [EventSectionController::class, 'order_section']);


// ADMIN
Route::get('/admin/home', [HomepageController::class, 'index_admin']);

// Event
// Add event
Route::get('/admin/event/add/event/', [TicketController::class, 'addEvent']);
Route::post('/admin/event/add/event/', [TicketController::class, 'addEventDetail']);

// Edit Event
Route::get('/admin/event/edit/event/{eventId}', [TicketController::class, 'editEvent'])->name('editEvent');

// Remove Event
Route::post('/admin/event/remove/event/{eventId}', [TicketController::class, 'removeEvent']);

// Section
// Add Section
Route::get('/admin/event/add/section/{id}', [TicketController::class, 'addSection']);
Route::post('/admin/event/add/section/{id}', [TicketController::class, 'addSectionDetail']);

// Remove Section
Route::post('/admin/event/remove/section/{eventId}/{sectionId}', [TicketController::class, 'removeSection']);