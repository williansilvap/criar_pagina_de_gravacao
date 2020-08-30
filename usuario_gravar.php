<?php
session_start();
require_once('variaveis.php');
require_once('conexao.php');

$idUsuario = filter_input(INPUT_POST, 'inputIdUsuario', FILTER_SANITIZE_NUMBER_INT);
$nomeUsuario = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_STRING);
$emailUsuario = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
$senhaUsuario = filter_input(INPUT_POST, 'inputPassword', FILTER_SANITIZE_STRING);


$sql= "UPDATE usuarios SET nome='$nomeUsuario', email='$emailUsuario', senha='$senhaUsuario' WHERE id='$idUsuario'";
$resp  = mysqli_query($conexao_bd, $sql);


//if(mysqli_affected_rows($conexao_bd)){
//    echo "Alterou!!!";
//}else{
//    echo "Não alterou!!!";
//}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SysPacientes - Usuário editado</title>
    <link rel="icon" href="img/favicon/favicon2.ico">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Usuário <?php echo($nomeUsuario); ?> editado com sucesso!!!</h1>
    <h1>Resultado da edição:<hr></h1>      

         <input type="hidden" id="inputIdUsuario" 
                name="inputIdUsuario" 
                value="<?php echo($idUsuario) ?>">

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
                name="inputEmail" placeholder="E-mail"
                value="<?php echo($emailUsuario); ?>"
                >
      </div>
      <div class="form-group">
         <label for="inputPassword">Senha</label>
         <input type="text" readonly=“true” class="form-control" id="inputPassword" 
                name="inputPassword" 
                value="<?php echo($senhaUsuario);?>">
      </div>

    <hr>
    <a href="admin.php" class="btn btn-warning" role="button">Retornar</a>
</body>
</html>