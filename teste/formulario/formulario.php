<?php
session_start();
require_once('../banco/conexao.php');

if(!isset($_SESSION['id_usuario'])){
    header("Location: ../index.php");
}else{
    $id_usuario = $_SESSION['id_usuario'];
    $buscar_usuario = "SELECT * FROM dados WHERE id = '$id_usuario'";
        $resultado_usuario = mysqli_query($conexao, $buscar_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        if(isset($resultado)){
           $nome_usuario = $resultado['Nome'];         
        }
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    require_once '../view/head.php';
    ?>
</head>

<body>
    <?php
    require_once '../view/nav.php';
    ?>

    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
    </head>

    <body>
        <fieldset>
            <legend>
                <div class="row justify-content-center">
                    <h2>Cadastro</h2>
                </div>
            </legend>

            <div class="row justify-content-center bg-light">
                <form action="formDAO.php" method="POST">
                    <label for="nome">Nome:</label><br>
                    <input id="nome" name="nome" type="text" required><br>
                    <label for="sobrenome">Sobrenome:</label><br>
                    <input id="sobrenome" name="sobrenome" type="text" required><br>
                    <label for="email">E-mail:</label><br>
                    <input id="email" name="email" type="email" required><br>
                    <label for="telefone">Telefone:</label><br>
                    <input id="telefone" name="telefone" type="tel" required><br>
                    <label for="usuario">Usuário:</label><br>
                    <input id="usuario" name="usuario" type="username" required><br>
                    <label for="senha">Senha:</label><br>
                    <input id="senha" name="senha" type="password" required><br><br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
                        <button type="submit" class="btn btn-primary" onclick="window.location.href='../main.php';" name="voltar">Voltar</button>
                    </div>
                </form>
        </fieldset>
    </body>
</html>