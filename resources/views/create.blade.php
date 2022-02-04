<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cadastrar Usuário</title>
</head>
<body>
  <main class="create-main">
    <form action="/lista/edit/" method="POST">
      <h1>Cadastrar novo usuário</h1>
      <hr>
      @csrf
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
        </div>
        <input type="text" id="nome" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Sobrenome</span>
        </div>
        <input type="text" id="sobrenome" name="sobrenome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Celular</span>
        </div>
        <input type="number" id="celular" name="celular" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        </div>
        <input type="text" id="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <article>
        <a href="http://127.0.0.1:8000/lista" type="button" class="btn btn-primary">Voltar</a>
        <button type="submit" class="btn btn-success">Criar</button>
      </article>
    </form>
  </main>
</body>
</html>