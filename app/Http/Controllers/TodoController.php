<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

        return view('todo');
        
    }

    public function store(Request $request){

        $todo = new Todo;

        $todo->name = $request->todo;

        $todo->save();

    }
}
