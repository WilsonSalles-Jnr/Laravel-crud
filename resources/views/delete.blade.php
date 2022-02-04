<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Delete usuário</title>
</head>
<body>
  <main class="main-delete">
    <section>
      <h3>Deletar usuário</h3>
      <hr>
      <h4>Você está deletando o seguinte usuário:</h4>
      <p>usuário id: <strong>{{$usuario->id}}</strong></p>
      <p>nome: <strong>{{$usuario->nome}}</strong></p>
      <p>sobrenome: <strong>{{$usuario->sobrenome}}</strong></p>
      <p>celular: <strong>{{$usuario->celular}}</strong></p>
      <p>e-mail: <strong>{{$usuario->email}}</strong></p>
      <hr>
      <article>
      <a href="http://127.0.0.1:8000/lista" type="button" class="btn btn-primary">Cancelar</a>
      <form action="/lista/delete/{{ $usuario->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </article>
    </section>
  </main>
</body>
</html>