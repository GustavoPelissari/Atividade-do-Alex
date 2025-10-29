@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><i class="bi bi-tags"></i> Lista de Categorias</h1>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Nova Categoria
            </a>
        </div>

        @if($categorias->count() > 0)
            <div class="row">
                @foreach($categorias as $categoria)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="bi bi-tag"></i> {{ $categoria->nome }}
                                </h5>
                                <p class="card-text text-muted">
                                    <i class="bi bi-list-task"></i> 
                                    {{ $categoria->tarefas_count ?? $categoria->tarefas->count() }} 
                                    {{ ($categoria->tarefas_count ?? $categoria->tarefas->count()) === 1 ? 'tarefa' : 'tarefas' }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" 
                                       class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-pencil"></i> Editar
                                    </a>
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Tem certeza que deseja excluir esta categoria? Todas as tarefas associadas serão afetadas.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-trash"></i> Excluir
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-tags display-1 text-muted"></i>
                <h3 class="text-muted mt-3">Nenhuma categoria encontrada</h3>
                <p class="text-muted">Comece criando sua primeira categoria para organizar suas tarefas!</p>
                <a href="{{ route('categorias.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Criar Primeira Categoria
                </a>
            </div>
        @endif
    </div>
</div>
@endsection