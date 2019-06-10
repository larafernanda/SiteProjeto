<?php 

session_start();
require_once ('../banco/conexao.php');

if(isset($_POST['input-login']) && isset($_POST["input-senha"])){

    $login = $_POST['input-login'];
    $senha = $_POST["input-senha"];
    
    $result_usuario = "SELECT * FROM dados WHERE usuario = '$login' && senha = '$senha'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['id_usuario'] = $resultado['id'];
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../main.php">';
        }else{
            echo "<script type='text/javascript'>window.alert('Login ou Senha Incorretos.!')
            window.location.href='../index.php';</script>";
            
        }

}
?>