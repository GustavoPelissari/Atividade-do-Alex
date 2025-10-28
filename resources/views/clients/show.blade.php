<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Unialfa</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Detalhes do cliente {{$client->nome}}
            </div>

            <div class="card-body">
                <p> ID: {{$client->id}}</p>
                <p> Nome: {{$client->nome}}</p>
                <p> Endereço: {{$client->categoria}}</p>
                <p> Observação: {{$client->marca}}</p>

                <button class="btn btn">
                    <a href="{{ route('clients.index') }}"> Voltar para Home</a>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
