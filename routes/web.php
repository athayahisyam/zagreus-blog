<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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

// Home
// Route::get('/', function () {
//     return view('index'); 
// });

// About
// Route::get('/about', function () {
//     $nama = 'Hisyam Athaya';
//     return view('about', ['nama' => $nama]);
// });

// Calling pages with certain controller and method
// Don't forget to INCLUDE THE CONTROLLER!

Route::get('/',[PagesController::class, 'home']);
Route::get('about/',[PagesController::class, 'about']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/authors/{authors}', [DashboardController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);

// If you do not want to use include statements, use this format instead

//Route::get('/', 'App\Http\Controllers\PagesController@home');