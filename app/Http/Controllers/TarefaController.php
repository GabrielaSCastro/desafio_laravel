<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public readonly Tarefa $tarefa;
public function __construct(){
$this->tarefa=new Tarefa();
}
    public function index()
    {
        $tarefas =$this->tarefa->all();
        return view('tarefas',['tarefas'=>$tarefas]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->tarefa->create([
            'titulo'=>$request->input('titulo'),
            'descricao'=>$request->input('descricao')]);
        if($created){
            return redirect()->back()->with('message', 'Criado com sucesso');
        }else {
            return redirect()->back()->with('message','Erro na criação da tarefa');
                   }
    }


    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        return view('tarefa_show',['tarefa'=>$tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        return view('tarefa_edit',['tarefa'=>$tarefa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->tarefa->where('id',$id)->update($request->except(['_token','_method']));
        if($updated){
            return redirect()->back()->with('message', 'Editado com sucesso');
        }else {
            return redirect()->back()->with('message','Nenhuma edição realizada');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->tarefa->where('id',$id)->delete();
        return redirect()->route('tarefas.index');
    }
}
