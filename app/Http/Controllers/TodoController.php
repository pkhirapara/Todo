<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

        $todo = new Todo;
        $todoList = $todo->all();

        return view('todo', ['todoList' => $todoList]);

    }

    public function store(Request $request){

        $todo = new Todo;

        $todo->name = $request->todo;

        $todo->save();

        return redirect('/');

    }
}
