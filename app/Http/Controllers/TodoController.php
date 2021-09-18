<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

        $todo = new Todo;
        $todoList = $todo->latest()->get();

        return view('todo', ['todoList' => $todoList]);

    }

    public function store(Request $request){

        $todo = new Todo;

        $todo->name = $request->todo;

        $todo->save();

        return redirect('/');

    }

    public function update(Request $request, $id){

        $todo = new Todo;
        $todo = $todo->find($id);
        $todo->name = $request->todo;
        $todo->save();

        return redirect('/');

    }

    public function destroy($id){

        $todo = new Todo;
        $todo = $todo->find($id);
        $todo->delete();

        return redirect('/');

    }
}
