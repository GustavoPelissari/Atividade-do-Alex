@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><i class="bi bi-list-task"></i> Lista de Tarefas</h1>
            <a href="{{ route('tarefas.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Nova Tarefa
            </a>
        </div>

        @if($tarefas->count() > 0)
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Título</th>
                                    <th>Descrição</th>
                                    <th>Categoria</th>
                                    <th>Status</th>
                                    <th class="text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarefas as $tarefa)
                                <tr>
                                    <td>
                                        <strong>{{ $tarefa->titulo }}</strong>
                                    </td>
                                    <td>
                                        {{ Str::limit($tarefa->descricao, 50) }}
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $tarefa->categoria->nome }}</span>
                                    </td>
                                    <td>
                                        @if($tarefa->concluida)
                                            <span class="badge bg-success">
                                                <i class="bi bi-check-circle"></i> Concluída
                                            </span>
                                        @else
                                            <span class="badge bg-warning">
                                                <i class="bi bi-clock"></i> Pendente
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('tarefas.edit', $tarefa->id) }}" 
                                               class="btn btn-outline-primary" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            @if(!$tarefa->concluida)
                                                <form action="{{ route('tarefas.complete', $tarefa->id) }}" 
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-outline-success" 
                                                            title="Marcar como Concluída">
                                                        <i class="bi bi-check"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            <form action="{{ route('tarefas.destroy', $tarefa->id) }}" 
                                                  method="POST" class="d-inline" 
                                                  onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" 
                                                        title="Excluir">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-inbox display-1 text-muted"></i>
                <h3 class="text-muted mt-3">Nenhuma tarefa encontrada</h3>
                <p class="text-muted">Comece criando sua primeira tarefa!</p>
                <a href="{{ route('tarefas.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Criar Primeira Tarefa
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
