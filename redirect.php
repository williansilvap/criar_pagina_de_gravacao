<?php
   require_once('variaveis.php');
   require_once('conexao.php');

   $email      = $_POST["inputEmail"];
   $senha      = $_POST["inputPassword"];

   //validando variaveis:
   if(strlen(trim($email)) == 0 &&
      strlen(trim($senha)) == 0){
      header("location: index.php");
   }
   
   //iniciando sessao
   session_start();
   $_SESSION["id_usuario"] = 0;

   $validou    = false;
   $erro       = "Nenhuma credencial encontrada!";
   $id_usuario = 0;

   //validar login
   $sql = "SELECT id, email, senha FROM usuarios WHERE email = '$email'";
   $resp = mysqli_query($conexao_bd, $sql);
   if($rows=mysqli_fetch_row($resp)){      
      if($senha == $rows[2]){
         $erro       = "";
         $validou    = true;
         $id_usuario = $rows[0];
      }else{
         $erro    = "Credenciais inválidas!";
         $validou = false;
      }
   }
   mysqli_close($conexao_bd);

   //exibir ou retornar:
   if($validou){
      /*echo "<hr>";
      echo "E-mail: " . $email."<br>";
      echo "Senha: ".$senha;
      */
      $_SESSION["id_usuario"] = $id_usuario;
      header("location:admin.php");
   }else{
      header("location:index.php?erro=$erro");
   }

?>