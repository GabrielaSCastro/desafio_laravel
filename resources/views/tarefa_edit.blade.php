@extends('master')
@section('content')

    <h1>Editar tarefa</h1>
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <form action="{{route('tarefas.update', ['tarefa'=>$tarefa->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="titulo" value="{{$tarefa->titulo}}">
        <input type="text" name="descricao" value="{{$tarefa->descricao}}">
        <button type="submit">Salvar</button>
    </form>
@endsection

