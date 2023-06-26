<?php

use App\Models\Hens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HenController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//All Hens Listing
Route::get('/', [HenController::class, 'index']);

//Show create form
Route::get('/hens/create', [HenController::class, 'create'])->middleware('auth');

//Store Hen's Data
Route::post('/hens', [HenController::class, 'store'])->middleware('auth');

//Manage Hens
Route::get('/hens/manage', [HenController::class, 'manage'])->middleware('auth');

//Show Edit Form
Route::get('/hens/{hen}/edit', [HenController::class, 'edit'])->middleware('auth');

//Edit Submit to Update
Route::put('/hens/{hen}', [HenController::class, 'update'])->middleware('auth');

//Delete hen
Route::delete('/hens/{hen}', [HenController::class, 'destroy'])->middleware('auth');

//Single Hen Listing
Route::get('/hens/{hen}', [HenController::class, 'show']);


//Show Register Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

