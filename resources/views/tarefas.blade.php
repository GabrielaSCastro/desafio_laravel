@extends('master')
@section('content')

    <h1>Tarefas</h1>
    <ul>
        @foreach($tarefas as $tarefa)
            <li>
                {{$tarefa->titulo,}}
            </li>
            <p>
                {{$tarefa->descricao,}}
            </p>
        @endforeach
    </ul>
@endsection
