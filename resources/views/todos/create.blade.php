@extends('layouts.app')
@section('content')
<div>
    <form action="{{ route('todos.store') }}" method="POST" class="flex flex-col">
        @csrf
        <input type="text" name="titulo" placeholder="titulo">
        @error('titulo')
            <span>{{$message}}</span>
        @enderror
        <textarea name="descripcion" id="desc" cols="3" rows="3" placeholder="descripcion"></textarea>
        @error('descripcion')
            <span>{{$message}}</span>
        @enderror
        <input type="text" name="fecha_limite" placeholder="fecha">
        @error('fecha_limite')
            <span>{{$message}}</span>
        @enderror
        <select name="proyecto_id" id="proyecto_id">
            <option value="-1">Seleciona una opcion</option>
            @foreach ($proyectos as $proyecto)
                <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
            @endforeach
        </select>
        @error('proyecto_id')
            <span>{{$message}}</span>
        @enderror
        <button type="submit">Crear</button>
    </form>

</div>
@endsection
