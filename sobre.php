<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code.Dev • Cursos gratuitos de programação</title>
    <link rel="stylesheet" href="css/sobre-style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--END GOOGLE FONTS-->

    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--END BOOTSTRAP ICONS-->

</head>

<body>
    
   <!-- NAVBAR -->
   <?php    
    require('php/cabecalho.php');
    ?>

    <main>
        <section>
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/Programming background collage.png" alt="Imagem programação">
                    </div><!--img-sobre-->
                    <div class="txt-sobre">
                        <h2>Sobre nós</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et <span>dolore magna aliqua</span>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
                        Excepteur sint occaecat cupidatat non <span>proident</span>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div><!--NAVBAR-->
                </div>
            </div>
        </section>

    <!--números-->
        <section class="numeros">
            <!--container-->
            <div class="container">
                <div class="numeros-txt">
                    <h1>Code.Dev em números</h1>
                </div>

                <div class="numeros-codedev">
                    <p>
                        <span>+100 mil</span><br>
                        alunos ativos
                    </p>

                    <p>
                        <span>+5 mil</span><br>
                        horas de conteúdo
                    </p>

                    <p>
                        <span>+500 mil</span><br>
                        de seguidores
                    </p>
                </div>
            </div>
            <!--end container-->

        </section>
    <!-- end números-->
    </main>

<!-- FOOTER -->
 
<?php    
    require('php/footer.php');
?>

</body>
</html>