<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/tarefas',[TarefaController::class,'index'])->name('tarefas.index');
Route::get('/tarefas/create',[TarefaController::class,'create'])->name('tarefas.create');
Route::post('/tarefas',[TarefaController::class,'store'])->name('tarefas.store');
Route::get('/tarefas/{tarefas}',[TarefaController::class,'show'])->name('tarefas.show');
Route::get('/tarefas/{tarefas}/edit',[TarefaController::class,'edit'])->name('tarefas.edit');
Route::put('/tarefas/{tarefas}',[TarefaController::class,'update'])->name('tarefas.update');
Route::delete('/tarefas/{tarefas}',[TarefaController::class,'destroy'])->name('tarefas.destroy');

