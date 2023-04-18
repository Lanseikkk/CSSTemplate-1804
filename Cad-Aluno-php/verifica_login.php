<?php
if (isset($_POST["email"]) && isset($_POST["senha"])) {
  $email = $_POST["email"];
  $senha = $_POST["senha"];


  if (file_exists("dados.txt")) {
    $dados = file_get_contents("dados.txt");
    $usuarios = explode("\n", $dados);

    foreach ($usuarios as $usuario) {
      $campos = explode(",", $usuario);
      if ($campos[4] == $email && $campos[3] == $senha) {
   
        header("Location: dados.php");
        exit();
      }
    }
  }


  header("Location: cadastro.php");
  exit();
}
?>

