<?php

use App\Models\Task;
use App\Models\User2;
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

Route::get('/', function () {

    return view('tasks',[
        'tasks'=>Task::all()
    ]);
});

Route::get('/tasks', function () {

    return view('tasks',[
        'tasks'=>Task::all()
        ]);
});

Route::get('/users', function () {


    return view('users',[
        'users'=>User2::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
