<?php
session_start();
require_once('banco/conexao.php');

//Tudo que o usuario não tiver acesso
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
} else {
    $id_usuario = $_SESSION['id_usuario'];
    $buscar_usuario = "SELECT * FROM dados WHERE id = '$id_usuario'";
    $resultado_usuario = mysqli_query($conexao, $buscar_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado)) {
        $nome_usuario = $resultado['Nome'];
    }
}
?>
<html>

<head>
    <title>TechSoft | Principal</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <div>
        <p class="title_menu">Menu de Administrador</p>
    </div>
    <div id="menu">
        <nav class="navegacao">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="formulario/formulario.php">Cadastro</a></li>
                <li><a href="formulario/sair.php">Sair</a></li>
            </ul>
        </nav>
    </div>
    <br><br>
</body>

</html>