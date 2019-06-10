<?php
session_start();
require_once('banco/conexao.php');

if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $buscar_usuario = "SELECT * FROM dados WHERE id = '$id_usuario'";
    $resultado_usuario = mysqli_query($conexao, $buscar_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if (isset($resultado)) {
        $nome_usuario = $resultado['Nome'];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SiteTeste</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <header class="menup">
        <main>
            <div class="logo">
                <img src="./img/logo essa.png" alt="LogoMarca da empresa TechSoft">
            </div>
            <?php if (!isset($_SESSION['id_usuario'])) { ?>
                <div class="login">
                    <ul>
                        <form method="POST" action="formulario/login.php">
                            <input placeholder="Login" id="input-login" name="input-login" type="text" />
                            <input placeholder="Senha" type="password" name="input-senha" id="input-senha" />
                            <input type="submit" class="entra" value="Entrar">
                        </form>
                    </ul>
                </div>
            <?php } else { ?>

                <div>
                    <a href="formulario/sair.php" style="color:white"><button style="cursor:pointer" class="botao2">Sair</button></a>
                </div>
                <div>
                    <p class="welcome" style="color:white">Olá, <?php echo $nome_usuario; ?></p>
                    <a href="main.php"><button class="botao1" style="cursor:pointer">Painel</button></a>
                </div>
            <?php } ?>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <section class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="#sobre">Sobre nós</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="contato/pag_contato.php">Fale conosco</a></li>
                </ul>
            </div>
        </section>
    </main>
    <section class="col-100">
        <div class="slide">
            <img src="./img/img0.png" alt="Imagem">
            <img src="./img/img1.png" alt="Imagem">
            <img src="./img/img2.png" alt="Imagem">
            <img src="./img/img3.png" alt="Imagem">
        </div>
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

    <div class="col-100">
        <link rel="stylesheet" href="css/noticias.css">
        <div id="noticias" class="content texto-destaque">
            <h1> Novidades </h1>



            <div class="col-100 bloco-imagens-texto">
                <link rel="stylesheet" href="css/noticias.css">
                <div class="content" style="margin-left: 24%;">
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://gizmodo.uol.com.br/wp-content/blogs.dir/8/files/2019/05/XiaomiHangzhouStore-e1558477044797-800x450.jpg">
                        <p> <b> Abertura da loja oficial da Xiaomi </b></p>
                        <p> A Xiaomi inaugurou neste sábado (01/06)
                            a sua loja oficial no Brasil, localizado em São Paulo,
                            no Shopping Ibirapuera. A loja disponibilizou uma quantidade limitada dos seus principais
                            smartphones, Redmi Note 7 e o Mi 9 com até 30% de desconto. Mais de mil pessoas compareceram
                            à inauguração.
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://pplware.sapo.pt/wp-content/uploads/2019/06/wwdc19-apple.jpg">
                        <p> <b> Apple apresenta modo noturno e melhorias de privacidade no iOs 13 </b> </p>
                        <p> No dia 03/06, a Apple apresentou durante a WWDC, algumas mudanças em seu novo sistema operacional: o modo noturno, que trará
                            uma paleta de cores escuras para os apps nativos do dispositivo; melhorias no sistema de reconhecimento facial e uma maior velocidade
                            de download.
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://s2.glbimg.com/CNewrwzN_itsQtnhy9Yfv9BFNy0=/0x0:695x408/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/a/h/i0jgX1SH2ikxSpB3VvzA/samsung-notebook7-01.jpg">
                        <p> <b> Samsung anuncia uma nova linha de computadores portáteis </b> </p>
                        <p> A Samsung anunciou, nesta segunda-feira (03/06), uma nova linha premium de computadores portáteis (Samsung 7 e 7 Force)
                            trazendo em sua configuração processadores Intel Core de oitava geração e memória RAM de até 24 GB. Seu design fino chamou
                            atenção por se assemelhar ao design do MacBook da Apple. Os modelos estarão disponíveis a partir do dia 26 de junho e custará
                            a partir de US$ 999 (R$ 3.875; conversão realizada a partir da cotação do dia 04/06/2019).
                        </p>
                    </div>
                </div>
                <div class="content" style="margin-left: 24%; float: left;">
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://cdn.wccftech.com/wp-content/uploads/2019/06/840_560.jpg">
                        <p><b> Samsung e AMD assinam acordo para trazer a placa gráfica Radeon aos smartphones </b> </p>
                        <p> A Samsung e a AMD assinaram uma parceria para uma parceria com a fabricante de componentes AMD.
                            O objetivo é aprimorar a inovação em aplicativos móveis e proporcionar tecnologias gráficas avançadas.
                            A AMD é uma empresa de hardware de computador especializada principalmente em processadores e placas gráficas para desktops. A empresa anunciou sua nova arquitetura de CPU de segunda geração 'Zen' no início deste mês,
                            surpreendendo com a promessa de igualar o desempenho de processadores Intel top de linha por metade do preço.
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://cdn.wccftech.com/wp-content/uploads/2019/05/Huawei-HongMeng-OS-1.jpg">
                        <p><b> Imagens do novo sistema operacional da Huawei, ARK OS </b></p>
                        <p> As imagens exibem aplicativos que parecem ser para versões Android, o que indica que o Ark OS suportará apps
                            nativos do sistema do Google e dará a opção de baixá-los usando uma loja de terceiros.
                            De acordo com o CEO da empresa, Richard Yu, o sistema da Huawei será compatível com os aplicativos do Android, o que confirma as imagens.
                            O sistema operacional dve executar os aplicativos Android 60% mais rápido e será multidispositivo.
                        </p>
                    </div>
                    <div class="col-3 bloco-texto bloco-imagem">
                        <img src="https://img.ibxk.com.br///2018/07/18/18165526368131-t1200x480.jpg">
                        <p><b> Google Cloud apresenta instabilidade </b></p>
                        <p> Neste domingo (02/06), a plataforma de computação em nuvem da Google apresentou instabilidades, afetando vários serviços.
                            A página de status do Google Cloud mostra problemas em duas ferramentas da plataforma: o Google Compute Engine e o Google Cloud Networking.
                            A falha foi registrada pela primeira vez às 16h25 do horário de Brasília.
                            Como resultado, as redes sociais foram tomadas por queixas de usuários que não conseguem acessar serviços como o Snapchat, que utiliza o Google Cloud como base para o seu serviço.
                            Tantos outros recursos foram afetados.
                        </p>
                    </div>
                </div>
            </div>

            <footer>
                <div class="col-100 footer">
                    <div id="sobre" class="content">
                        <div class="col-5">
                            <h2><b> Sobre a Empresa</b></h2>
                            <p>Somos uma empresa brasileira de desenvolvimento de software e estamos no mercado há mais de 20 anos. </p>
                            <p> Fazendo nosso trabalho valer a pena com a satisfação do cliente.</p>
                            <p class="clock"> Atendimento de Seg à Sexta das 08:00hrs às 18:00hrs</p>
                            <p class="local"> Icó-CE</p>
                            <p class="email"> contatotechsoft1@gmail.com</p>
                            <p class="telefone"> (88) 3561 - 0000</p>
                        </div>

                    </div>
            </footer>
            <div class="col-100 footer">
                <div class="content">
                    <p>© 2019 TechSoft</p>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>