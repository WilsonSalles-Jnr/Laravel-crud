<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://laravel.com/img/logomark.min.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <p>Faça o login para conectar-se ao banco de dados</p>
      </div>

      <div class="form-label-group">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      </div>

      <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">© Wilson Salles Junior</p>
      <p class="mt-5 mb-3 text-muted text-center"><a href="https://getbootstrap.com/docs/4.0/examples/floating-labels/" class="text-muted">modelo de tela de login de Bootstrap</a></p>
    </form>
</body>
</html>