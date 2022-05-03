<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Teste laravel-Criar</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Adicionar Empresa</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Voltar</a>
                    </div>
                </div>
            </div>
            
            <form action="{{ route('empresas.salvar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome da Empresa:</strong>
                            <input type="text" name="nome" class="form-control" placeholder="Nome da empresa">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Email da Empresa:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email da empresa">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereço da Empresa:</strong>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço da empresa">
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>