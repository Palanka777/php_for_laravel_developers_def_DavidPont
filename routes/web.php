<?php

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
    $task1=new stdClass();
    $task1->id=1;
    $task1->title="Task 1";
    $task1->description="bla bla bla";
    $task1->completed= 1;

    $task2=new stdClass();
    $task2->id=2;
    $task2->title="Task 2";
    $task2->description="bla bli blu";
    $task2->completed= 0;

    $tasks=[
        $task1,
        $task2
    ];

    return view('tasks',[
        'tasks'=>$tasks
    ]);
});

Route::get('/tasks', function () {
    $task1=new stdClass();
    $task1->id=1;
    $task1->title="Task 1";
    $task1->description="bla bla bla";
    $task1->completed= 1;

    $task2=new stdClass();
    $task2->id=2;
    $task2->title="Task 2";
    $task2->description="bla bli blu";
    $task2->completed= 0;

    $tasks=[
        $task1,
        $task2
    ];

    return view('tasks',[
        'tasks'=>$tasks
    ]);
});

Route::get('/users', function () {
    $users1=new stdClass();
    $users1->id=1;
    $users1->name="David";
    $users1->surname="Pont";
    $users1->email= "dpont@iesebre.com";

    $users2=new stdClass();
    $users2->id=2;
    $users2->name="Albert";
    $users2->surname="Ormazabal";
    $users2->email= 'ormazabla@iesebre.com';

    $users=[
        $users1,
        $users2
    ];

    return view('users',[
        'users'=>$users
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
