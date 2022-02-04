<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Laravel User List</title>
</head>
<body>
  <main class="start">

    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://laravel.com/img/logomark.min.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Laravel User List</h1>
        <hr>
        <p>Create, Read, Update and Delete users</p>
      </div>
      @auth
      <p>Bem vindo</p>
      <p class="login-name"><strong>{{$usuario->name}}</strong></p>
      <section>
        
        <a href="/lista" type="button" class="btn btn-primary mt-3">Ver Lista</a>
      </section>
      @endauth
      @guest
      <section>
        <a href="/login" type="button" class="btn btn-success">Login</a>
        <a href="/register" class="mt-3">Criar novo usuário</a>
      </section>
      @endguest
      <p class="mt-5 mb-3 text-muted text-center">© Wilson Salles Junior</p>
    </form>
  </main>
</body>
</html>