@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">
                    <i class="bi bi-pencil"></i> Editar Categoria
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome da Categoria *</label>
                        <input type="text" 
                               name="nome" 
                               id="nome"
                               class="form-control @error('nome') is-invalid @enderror" 
                               value="{{ old('nome', $categoria->nome) }}"
                               placeholder="Digite o nome da categoria" 
                               required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($categoria->tarefas->count() > 0)
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle"></i>
                            Esta categoria possui {{ $categoria->tarefas->count() }} 
                            {{ $categoria->tarefas->count() === 1 ? 'tarefa associada' : 'tarefas associadas' }}.
                        </div>
                    @endif

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Atualizar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection