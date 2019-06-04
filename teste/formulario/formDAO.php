<?php


$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$fone= $_POST['telefone'];
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];

require_once ('../banco/conexao.php');

$atualizar = false;
$id = 0;
$nome = '';
$sobrenome = '';
$email = '';
$telefone = '';
$usuario= '';
$senha= '';

if(isset($_POST['enviar'])){
   $nome = $_POST['nome'];
   if(empty($_POST['nome'])){
      echo "Campo nome vazio!";
   }
   $sobrenome = $_POST['sobrenome'];
   if(empty($_POST['sobrenome'])){
      echo "Campo sobrenome vazio!";
   }
   $email = $_POST['email'];
   if(empty($_POST['email'])){
      echo "Campo email vazio!";
   }
   $telefone = $_POST['telefone'];
   if(empty($_POST['telefone'])){
      echo "Campo telefone vazio!";
   }
   $usuario = $_POST['usuario'];
   if(empty($_POST['usuario'])){
   echo "Campo usuario vazio!";
   }
   $senha = $_POST['senha'];
   if(empty($_POST['senha'])){
   echo "Campo senha vazio!";

   }
   $conexao->query("INSERT INTO
   dados(Nome, Sobrenome, Email, Telefone, Usuario, Senha)
   VALUES ('$nome', '$sobrenome','$email', '$telefone', '$usuario', '$senha')") or die($conexao->error);

   echo "<script type='text/javascript'>window.alert('Usuário Cadastrado com Sucesso!');</script>";
   echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=formulario.php">';
   exit;

   header("Location: formulario.php");
   

}


?>