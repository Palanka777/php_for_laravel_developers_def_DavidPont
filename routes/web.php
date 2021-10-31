<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\User2Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TaskController::class,'index'] );

Route::get('/tasks',[TaskController::class,'index'] );

Route::get('/users', [User2Controller::class,'index'] );

Route::get('/contact', [ContactController::class,'index']);

Route::get('/about', [AboutController::class,'index']);
