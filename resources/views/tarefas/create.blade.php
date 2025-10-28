<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>

<body>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título" class="form-control" required>

        <textarea name="descricao" placeholder="Descrição" class="form-control"></textarea>

        <select name="categoria_id" class="form-control" required>
            @foreach($categorias as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-success mt-2">Salvar</button>
    </form>

</body>

</html>
