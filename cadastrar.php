<?php
   session_start();
   require_once('variaveis.php');
   require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes - Cadastrar usuário</title>
    <link rel="icon" href="img/favicon/favicon2.ico">
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Cadastrando usuário</h1>
   <hr>
   <div class="container">
   <form
      method="post"
      action="usuario_cadastrar.php">

      <div class="form-group">
         <label for="inputNome">Nome do usuário:</label>
         <input type="text" class="form-control" id="inputNome" 
                name="inputNome" placeholder="Digite o nome do usuário"
                >
      </div>

      <div class="form-group">
         <label for="inputEmail">E-mail:</label>
         <input type="email" class="form-control" id="inputEmail" 
                name="inputEmail" placeholder="Digite o e-mail do usuário"
                >
      </div>

      <div class="form-group">
         <label for="inputPassword">Senha</label>
         <input type="text" class="form-control" id="inputPassword" 
                name="inputPassword" placeholder="Digite a senha do usuário"
                >
      </div>

      <button type="submit" class="btn btn-success">Gravar</button>&nbsp;


      <a href="admin.php" class="btn btn-warning" role="button">Retornar</a>
   </form>
   </div>
</body>
</html>