@extends('layouts.app')

@section('title', 'Criar Nova Categoria')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">
                    <i class="bi bi-plus-circle"></i> Criar Nova Categoria
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome da Categoria *</label>
                        <input type="text" 
                               name="nome" 
                               id="nome"
                               class="form-control @error('nome') is-invalid @enderror" 
                               value="{{ old('nome') }}"
                               placeholder="Digite o nome da categoria" 
                               required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            Ex: Trabalho, Pessoal, Estudos, Projetos, etc.
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-save"></i> Salvar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection