<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Teste laravel-Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Teste laravel</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('empresas.criar') }}"> Criar Empresa</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('sucesso'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
        <tr>
        <th>S.No</th>
        <th>Nome da Empresa</th>
        <th>Email da Empresa</th>
        <th>Endereço da Empresa</th>
        <th width="280px">Ação</th>
        </tr>

        @foreach ($empresas as $empresa)
        <tr>
        <td>{{ $empresa->id }}</td>
        <td>{{ $empresa->nome }}</td>
        <td>{{ $empresa->email }}</td>
        <td>{{ $empresa->endereco }}</td>
        <td>
        <form action="{{ route('empresas.deletar',$empresa->id) }}" method="Post">
            <a class="btn btn-primary" href="{{ route('empresas.editar',$empresa->id) }}">Editar</a>
            @csrf

            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
        </td>
        </tr>
        @endforeach

        </table>
        {!! $empresas->links() !!}
    </div>
    
</body>
</html>