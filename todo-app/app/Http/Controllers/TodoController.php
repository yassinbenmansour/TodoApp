<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('Home' , [
            'todos' => $todos
        ]);
    }

    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);
        Todo::create($attributes);
        return redirect('/');
    }


}
