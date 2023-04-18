<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include 'header.php';?>
    <div class="container">
      <h2>Bem-vindo!</h2>
      <p>Entre para acessar seus dados:</p>
      <form method="post" action="verifica_login.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
		<br>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
      <br>
      <p>Não tem cadastro?</p>
      <a href="cadastro.php" class="btn btn-secondary">Cadastre-se</a>
    </div>
    <?php include 'footer.php';?>
  </body>
</html>
