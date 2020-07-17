<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div class="content">
        <div class="title m-b-md">

              <h2>Bem vindo ao cadastro de produtos.</h2>
              <h3>Abaixo, clique no botão para entrar na aplicação</h3>
              <a href="{{url('produtos')}}">
              <button type="button" class="btn btn-warning">Entrar</button>
              </a>
        </div>
        </div>
        </div>
    </body>
</html>
