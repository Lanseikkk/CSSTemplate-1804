<?php include("header.php"); ?>

<div class="container">
  <h2>Cadastro</h2>
  <form action="dados.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="turma">Turma:</label>
      <input type="text" class="form-control" id="turma" placeholder="Digite sua turma" name="turma" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" name="telefone" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
    </div>
    <div class="form-group">
      <label for="matricula">Matrícula:</label>
      <input type="text" class="form-control" id="matricula" placeholder="Digite sua matrícula" name="matricula" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<?php include("footer.php"); ?>
