<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaCRUDController;



Route::get('/', [EmpresaCRUDController::class, 'index'])->name('empresas.index');
Route::get('/criar', [EmpresaCRUDController::class, 'criar'])->name('empresas.criar');
Route::get('/editar/{empresa}', [EmpresaCRUDController::class, 'editar'])->name('empresas.editar');
Route::put('/{id}/atualizar', [EmpresaCRUDController::class, 'atualizar'])->name('empresas.atualizar');
Route::post('/salvar', [EmpresaCRUDController::class, 'salvar'])->name('empresas.salvar');
Route::delete('/{id}/deletar', [EmpresaCRUDController::class, 'deletar'])->name('empresas.deletar');


