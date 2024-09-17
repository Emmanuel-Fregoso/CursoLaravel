@extends('layouts.app')
@section('content')
<div class="flex flex-grow items-center justify-center bg-gray-900 h-full">
    <div class="max-w-full p-8 bg-gray-800 rounded-lg shadow-lg w-96 text-gray-200">
        <div class="flex items-center mb-6">
            <svg class="h-8 w-8 text-indigo-500 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <h4 class="font-semibold ml-3 text-lg">Todos</h4>
        </div>
        @foreach ($todos as $todo)
        <div class="rounded cursor-pointer hover:bg-gray-900">
            <label class="flex items-center h-10 px-2" for="{{$todo->id}}">
                <input type="checkbox" class="hidden peer/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}" id="{{$todo->id}}" @if ($todo->completado) checked @endif>
                <span class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-500 rounded-full peer-checked/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}:bg-emerald-600 peer-checked/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}:border-emerald-600 peer-checked/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}:text-white ">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="ml-4 text-sm peer-checked/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}:line-through peer-checked/{{str_replace('.', '', explode(' ',$todo->titulo)[0])}}:text-gray-400">{{$todo->titulo}}</span>
                <a class="ml-5" href="{{route('todos.edit',$todo->id)}}">Editar</a>
                <form action="{{ route('todos.destroy',$todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="ml-7">X</button>
                </form>
            </label>
            <div class="flex items-center justify-between px-2 pb-2">
                <span><small class="text-xs text-gray-400 ml-10">{{$todo->descripcion}}</small></span>
                <span class="text-xs {{$todo->completado ? 'text-emerald-400' : 'text-amber-400' }}">{{$todo->fecha_limite}}</span>
            </div>
        </div>
        @endforeach
        <a href="{{ route('todos.create') }}" class="flex items-center w-full h-8 px-2 mt-2 text-sm font-medium rounded">
            <svg class="w-5 h-5 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span class="ml-4 bg-transparent text-gray-400 font-medium">add a new task</span>
        </a>
    </div>
</div>
@endsection
