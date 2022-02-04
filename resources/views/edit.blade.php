<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Editar usuário</title>
</head>
<body>
  
  <table class="table table-striped table-hover p-3">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>Celular</th>
      <th>E-mail</th>
      <th>Salvar</th>
      <th>Cancelar</th>
    </tr>
    <tr>
      <form action="/lista/update/{{$usuario->id}}" method="POST">
        @csrf
        @method('PUT')
        <td>{{$usuario->id}}</td>
        <td><input type="text" id="nome" placeholder="Nome" value="{{$usuario->nome}}"></td>
        <td><input type="text"  id="sobrenome" placeholder="Sobrenome" value="{{$usuario->sobrenome}}"></td>
        <td><input type="number"  id="celular" placeholder="Phone" value="{{$usuario->celular}}"></td>
        <td><input type="email" id="email" placeholder="e-mail" value="{{$usuario->email}}"></td>
      <td><button type="submit" class="btn btn-success">Salvar</button></td>

      </form>
    <td><a href="http://127.0.0.1:8000/lista" type="button" class="btn btn-danger">Cancelar</a></td>
    </tr>
  </table>
</body>
</html>