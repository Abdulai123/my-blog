<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AuthControllers::class, 'showLoginForm']);
Route::post('/auth/login', [AuthControllers::class, 'processLogin']);

Route::get('/auth/signup', [AuthControllers::class, 'showSignupForm']);
Route::post('/auth/signup', [AuthControllers::class, 'processSignup']);