<!DOCTYPE html>
<html>
  <head>
    <title>Editar dados do usuário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include 'header.php';?>
    <div class="container">
      <h2>Editar dados do usuário</h2>
      <form method="post" action="dados.php">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($_POST["nome"]) ? $_POST["nome"] : ""; ?>">
        </div>
        <div class="form-group">
          <label for="turma">Turma:</label>
          <input type="text" class="form-control" id="turma" name="turma" value="<?php echo isset($_POST["turma"]) ? $_POST["turma"] : ""; ?>">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha" value="<?php echo isset($_POST["senha"]) ? $_POST["senha"] : ""; ?>">
        </div>
        <div class="form-group">
          <label for="telefone">Telefone:</label>
          <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo isset($_POST["telefone"]) ? $_POST["telefone"] : ""; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>">
        </div>
        <div class="form-group">
          <label for="matricula">Matrícula:</label>
          <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo isset($_POST["matricula"]) ? $_POST["matricula"] : ""; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
    <?php include 'footer.php';?>
  </body>
</html>
