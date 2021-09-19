<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Login;

class LoginController extends Controller
{
    public function index(){

        return view('login');

    }

    public function store(){

        $user = new Login;
        $user->username = Str::random(10); 
        $user->save();

        return redirect('/todo');

    }
}
