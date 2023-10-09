<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\CategoryControllers;
use App\Http\Controllers\PostControllers;
use App\Http\Controllers\UserController;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
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
    
    return dd(Category::all());
});

Route::get('/auth/login', [AuthControllers::class, 'showLoginForm']);
Route::post('/auth/login', [AuthControllers::class, 'processLogin']);

Route::get('/auth/signup', [AuthControllers::class, 'showSignupForm']);
Route::post('/auth/signup', [AuthControllers::class, 'processSignup']);

Route::get('/logout', [AuthControllers::class, 'loggout']);

Route::post('/add', [PostControllers::class, 'add']);

Route::post('/add/post', [PostControllers::class, 'add_post']);

Route::post('/add/category', [CategoryControllers::class, 'add_category']);