<?php

namespace App\Http\Controllers;

use App\Models\User2;

class User2Controller extends Controller
{
    public function index(){

        return view('users',[
            'users'=>User2::all()
        ]);

    }
}
