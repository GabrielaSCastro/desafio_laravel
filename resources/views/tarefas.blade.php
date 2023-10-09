@extends('master')
@section('content')

    <h1>Tarefas</h1>
    <hr>
    <a href="{{route('tarefas.create')}}">Criar nova tarefa</a>
    <ul>
        @foreach($tarefas as $tarefa)
            <li>
                {{$tarefa->titulo,}}  | <a href="{{route('tarefas.show',['tarefa'=>$tarefa->id])}}">Abrir tarefa</a>
            </li>
        @endforeach
    </ul>
@endsection
