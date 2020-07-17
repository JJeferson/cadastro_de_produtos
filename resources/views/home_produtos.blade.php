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
        <div  class="container" align ="center" >


              <h2>Bem vindo ao cadastro de produtos</h2>

              <div class="form-group">
              <input type="buscar" class="form-control" id="buscar" name="buscar" placeholder="Buscar ...">
              </div>



              <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo_Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Estoque Atual</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

  @foreach($prod as $produtos)
  <tr>
      <th scope="row">{{$produtos->id}}</th>
      <td>{{$produtos->descricao}}</td>
      <td>{{$produtos->est_atual}}</td>
      <td>
      <img  src="{{$produtos->foto}}" width="20%" >
      </td>
      <td>
      <a href="">
      <button type="button" class="btn btn-warning">Ver/Editar</button>
      </a>
      <a  class="js-del"  href=""  >
      <button type="button" class="btn btn-danger">Excluir</button>
      </a>

      </td>
    </tr>
  @endforeach

  </tbody>
        </div>
    </body>
</html>
