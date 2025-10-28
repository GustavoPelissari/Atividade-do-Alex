<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>

<body>
    <h1>Lista de Tarefas</h1>

    <a href="{{ route('tarefas.create') }}" class="btn btn-primary">Nova Tarefa</a>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoria</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->categoria->nome }}</td>
                <td>{{ $tarefa->concluida ? 'Concluída' : 'Pendente' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
