<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Teste laravel-Editar</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Empresa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('empresas.index') }}" enctype="multipart/form-data"> Voltar</a>
                </div>
                </div>
            </div>

            <form action="{{ route('empresas.atualizar', $empresa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome da Empresa:</strong>
                            <input type="text" name="nome" value="{{ $empresa->nome }}" class="form-control" placeholder="Nome da Empresa">
                        
                            @error('nome')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email da Empresa:</strong>
                            <input type="email" name="email" class="form-control" placeholder="Email da Empresa" value="{{ $empresa->email }}">
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereço da Empresa:</strong>
                            <input type="text" name="endereco" value="{{ $empresa->endereco }}" class="form-control" placeholder="Endereço da empresa">
                            @error('endereco')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>