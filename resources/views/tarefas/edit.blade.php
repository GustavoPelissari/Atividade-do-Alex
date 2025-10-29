@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">
                    <i class="bi bi-pencil"></i> Editar Tarefa
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título *</label>
                        <input type="text" 
                               name="titulo" 
                               id="titulo"
                               class="form-control @error('titulo') is-invalid @enderror" 
                               value="{{ old('titulo', $tarefa->titulo) }}"
                               placeholder="Digite o título da tarefa" 
                               required>
                        @error('titulo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" 
                                  id="descricao"
                                  class="form-control @error('descricao') is-invalid @enderror" 
                                  rows="4"
                                  placeholder="Digite uma descrição detalhada da tarefa">{{ old('descricao', $tarefa->descricao) }}</textarea>
                        @error('descricao')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">Categoria *</label>
                        <select name="categoria_id" 
                                id="categoria_id"
                                class="form-select @error('categoria_id') is-invalid @enderror" 
                                required>
                            <option value="">Selecione uma categoria</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}" 
                                        {{ old('categoria_id', $tarefa->categoria_id) == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nome }}
                                </option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   name="concluida" 
                                   id="concluida"
                                   value="1"
                                   {{ old('concluida', $tarefa->concluida) ? 'checked' : '' }}>
                            <label class="form-check-label" for="concluida">
                                <i class="bi bi-check-square"></i> Marcar como concluída
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Atualizar Tarefa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection