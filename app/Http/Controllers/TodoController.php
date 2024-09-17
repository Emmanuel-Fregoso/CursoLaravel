<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::limit(5)->get();
        $todo = $todos->first();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyectos = Proyecto::all();
        return view('todos.create', compact('proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'descripcion' => 'required|min:10',
            'fecha_limite' => 'required|date',
            'proyecto_id' => 'required|gt:0'
        ], [
            'titulo.required' => 'El campo título es obligatorio',
            'titulo.min' => 'El campo título debe tener al menos 5 caracteres',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'descripcion.min' => 'El campo descripción debe tener al menos 10 caracteres',
            'fecha_limite.required' => 'El campo fecha límite es obligatorio',
            'fecha_limite.date' => 'El campo fecha límite debe ser una fecha',
            'proyecto_id.required' => 'El campo proyecto es obligatorio'
        ]);

        Todo::create($request->all());

        return redirect()->route('todos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        $proyectos = Proyecto::all();
        return view('todos.edit', compact('todo', 'proyectos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'titulo' => 'required|min:5',
            'descripcion' => 'required|min:10',
            'fecha_limite' => 'required|date',
            'proyecto_id' => 'required|gt:0'
        ], [
            'titulo.required' => 'El campo título es obligatorio',
            'titulo.min' => 'El campo título debe tener al menos 5 caracteres',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'descripcion.min' => 'El campo descripción debe tener al menos 10 caracteres',
            'fecha_limite.required' => 'El campo fecha límite es obligatorio',
            'fecha_limite.date' => 'El campo fecha límite debe ser una fecha',
            'proyecto_id.required' => 'El campo proyecto es obligatorio'
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
