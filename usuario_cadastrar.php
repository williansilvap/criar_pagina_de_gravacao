<?php
session_start();
require_once('variaveis.php');
require_once('conexao.php');

$nomeUsuario = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_STRING);
$emailUsuario = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
$senhaUsuario = filter_input(INPUT_POST, 'inputPassword', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario')";
$resp = mysqli_query($conexao_bd, $sql);

//if(mysqli_insert_id($conexao_bd)){
//    echo "Alterou!!!";
//
//}else{
//    echo "Não alterou!!!";
//
//}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes - Usuário cadastrado</title>
    <link rel="icon" href="img/favicon/favicon2.ico">
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Usuário <?php echo($nomeUsuario); ?> cadastrado com sucesso!!!</h1>
    <h1>Resultado do cadastro:</h1>
   <hr>
   <div class="container">

      <div class="form-group">
         <label for="inputNome">Nome do usuário:</label>
         <input type="text" readonly=“true” class="form-control" id="inputNome" 
                name="inputNome" placeholder="Nome do usuário"
                value="<?php echo($nomeUsuario); ?>"
                >
      </div>

      <div class="form-group">
         <label for="inputEmail">E-mail:</label>
         <input type="email" readonly=“true” class="form-control" id="inputEmail" 
                name="inputEmail" placeholder="E-mail do usuário"
                value="<?php echo($emailUsuario); ?>"
                >
      </div>

      <div class="form-group">
         <label for="inputPassword">Senha</label>
         <input type="text" readonly=“true” class="form-control" id="inputPassword" 
                name="inputPassword" placeholder="Senha do usuário"
                value="<?php echo($senhaUsuario);?>"
                >
                
      </div>

      <a href="admin.php" class="btn btn-warning" role="button">Retornar</a>
   </form>
   </div>
</body>
</html>