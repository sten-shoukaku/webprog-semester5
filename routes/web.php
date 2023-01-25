<?php

use App\Http\Controllers\DetailPemesananController;
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

//UI/UX Steffi Soeroredjo

// Index
Route::get('/', [WelcomeController::class, 'index']);

// Sign In
Route::get('/signin', [WelcomeController::class, 'signin'])->name('login');
Route::post('/signin', [WelcomeController::class, 'authentication']);

//Sign Up
Route::get('/signup', [WelcomeController::class, 'signup']);
Route::post('/signup', [WelcomeController::class, 'store']);

// Profile
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth', 'member');
Route::get('/profile/editpassword', [UserController::class, 'editpassword'])->middleware('auth', 'member');
Route::post('/profile/editpassword', [UserController::class, 'changepassword'])->middleware('auth', 'member');
Route::get('/profile/editprofile', [UserController::class, 'editprofile'])->middleware('auth', 'member');
Route::post('/profile/editprofile', [UserController::class, 'changeprofile'])->middleware('auth', 'member');

Route::get('/admin/profile', [UserController::class, 'adminprofile'])->middleware('auth', 'admin');
Route::get('/admin/profile/editpassword', [UserController::class, 'admineditpassword'])->middleware('auth', 'admin');
Route::post('/admin/profile/editpassword', [UserController::class, 'adminchangepassword'])->middleware('auth', 'admin');

// Logout
Route::post('/logout', [WelcomeController::class, 'logout']);


// USER
Route::get('/home', [HomepageController::class, 'index'])->middleware('auth', 'member');

// Event
Route::get('/event/{id}', [EventController::class, 'event_detail'])->middleware('auth', 'member');
Route::get('/event/{id}/order/{section_id}', [EventSectionController::class, 'order_section'])->middleware('auth', 'member');

// Order
Route::get('/orderDetail', [DetailPemesananController::class, 'index'])->middleware('auth', 'member');
Route::post('/orderDetail', [DetailPemesananController::class, 'order'])->middleware('auth', 'member');

// View Order
Route::get('/vieworder', [EventController::class, 'vieworder'])->middleware('auth', 'member');


// ADMIN
Route::get('/admin/home', [HomepageController::class, 'index_admin'])->middleware('auth', 'admin');

// Event
// Add event
Route::get('/admin/event/add/event/', [TicketController::class, 'addEvent'])->middleware('auth', 'admin');
Route::post('/admin/event/add/event/', [TicketController::class, 'addEventDetail'])->middleware('auth', 'admin');

// Edit Event
Route::get('/admin/event/edit/event/{eventId}', [TicketController::class, 'editEvent'])->name('editEvent')->middleware('auth', 'admin');

// Remove Event
Route::post('/admin/event/remove/event/{eventId}', [TicketController::class, 'removeEvent'])->middleware('auth', 'admin');

// Section
// Add Section
Route::get('/admin/event/add/section/{id}', [TicketController::class, 'addSection'])->middleware('auth', 'admin');
Route::post('/admin/event/add/section/{id}', [TicketController::class, 'addSectionDetail'])->middleware('auth', 'admin');

// Remove Section
Route::post('/admin/event/remove/section/{eventId}/{sectionId}', [TicketController::class, 'removeSection'])->middleware('auth', 'admin');
