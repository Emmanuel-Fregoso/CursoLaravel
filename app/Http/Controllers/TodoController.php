<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function obtenerTodos()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }
}
