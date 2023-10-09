@extends('master')
@section('content')

    <h1>{{$tarefa->titulo}}</h1>
    <p>
        {{$tarefa->descricao,}}
    </p>
    <hr>
    <a href="{{route('tarefas.edit',['tarefa'=>$tarefa->id])}}">Editar</a>
    <form action="{{route('tarefas.destroy',['tarefa'=>$tarefa->id])}}"method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>
    </form>

@endsection
