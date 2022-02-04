<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>
<body>
  <nav class="lista-nav">
    <a href="http://127.0.0.1:8000/" type="button" class="btn btn-danger">Sair</a>
    <h3>Lista de usuários</h3>
    <a href="http://127.0.0.1:8000/lista/edit" type="button" class="btn btn-success">Adicionar</a>
  </nav>
    <table class="table table-striped table-hover p-3">
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Celular</th>
        <th>E-mail</th>
        <th>Editar</th>
        <th>Deletar</th>
      </tr>
      @yield('content')
    </table>
</body>
</html>