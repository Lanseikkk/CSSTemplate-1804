<!DOCTYPE html>
<html>
  <head>
    <title>Dados do usuário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'header.php';?>
    <div class="container">
      <h2>Dados do usuário</h2>
      <table class="table">
        <tbody>
          <tr>
            <td><strong>Nome:</strong></td>
            <td><?php echo $_POST["nome"]; ?></td>
          </tr>
          <tr>
            <td><strong>Turma:</strong></td>
            <td><?php echo $_POST["turma"]; ?></td>
          </tr>
          <tr>
            <td><strong>Senha:</strong></td>
            <td><?php echo $_POST["senha"]; ?></td>
          </tr>
          <tr>
            <td><strong>Telefone:</strong></td>
            <td><?php echo $_POST["telefone"]; ?></td>
          </tr>
          <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo $_POST["email"]; ?></td>
          </tr>
          <tr>
            <td><strong>Matrícula:</strong></td>
            <td><?php echo $_POST["matricula"]; ?></td>
          </tr>
        </tbody>
      </table>
      <a href="edita.php" class="btn btn-primary">Editar</a>
    </div>
    <?php include 'footer.php';?>
  </body>
</html>

<style>
	body {
			background-color: #f2f2f2;
		}
		h1 {
			margin-top: 50px;
			text-align: center;
			font-size: 36px;
			font-weight: bold;
			color: #666666;
		}
		.container {
			margin-top: 50px;
			background-color: #ffffff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 30px;
		}
		table th, table td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #cccccc;
		}
		.btn-editar {
			background-color: #007bff;
			color: #ffffff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}
</style>