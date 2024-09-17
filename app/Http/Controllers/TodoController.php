<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function obtenerTodos()
    {
        $todos = Todo::limit(5)->get();
        return view('todos.index', compact('todos'));
    }
}
