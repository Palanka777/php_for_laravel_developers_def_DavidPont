<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //CRUD ->
    //CREATE -> create (formulari) store POST
    //RETRIVE -> LIST (index) i show (mostra un item)
    //UPDATE -> edit (formulari) -> update -> POST del formulari d'edicio
    //DELETE -> destroy

    public function index(){

        return view('tasks',[
            'tasks'=>Task::all()
        ]);

    }
}
