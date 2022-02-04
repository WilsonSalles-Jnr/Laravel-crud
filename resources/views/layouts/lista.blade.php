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
    <h3>Lista de usuários</h3>
    @auth
    <a href="/lista/edit" type="button" class="btn btn-success">Adicionar</a>
    <form action="/logout" method="POST">
      @csrf
      <a href="/logout"
        type="button"
        class="btn btn-danger"
        onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
    </form>
    @endauth
    @guest
    <a href="/login" type="button" class="btn btn-primary">Login</a>
    <a href="/register" type="button" class="btn btn-primary">Registrar</a>
    @endguest
  </nav>
    @guest
    <section>
      <h1>Apenas usuários podem ver a lista de usuários</h1>
    </section>
    @endguest
    @auth
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
    @yield('noUser')
    @endauth
</body>
</html>