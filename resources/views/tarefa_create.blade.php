@extends('master')
@section('content')

    <h1>Criar tarefa</h1>
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <form action="{{route('tarefas.store')}}" method="post">
        @csrf
        <input type="text" name="titulo" placeholder="Título da tarefa">
        <input type="text" name="descricao" placeholder="Descrição da tarefa">
        <button type="submit">Criar</button>
    </form>
@endsection
