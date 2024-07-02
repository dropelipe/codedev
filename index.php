<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code.Dev • Cursos gratuitos de programação</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- NAVBAR -->
    <?php    
    require('php/cabecalho.php');
    ?>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site"><!--txt-topo-site-->
                        <h1>Aprenda<br>
                            Codifique<br>
                            Cresça</h1>

                            <p>Do básico ao avançado<br>
                                é com a <strong>Code<span>.</span>Dev</strong></p>

                        <div class="btn-comece-agora"><!--btn-login-->
                            <a href="login.php">
                                <button>Começe agora!</button>
                            </a>
                        </div><!--btn-contato-->
                    </div><!--txt-topo-site-->

                    <div class="img-topo-site"><!--img-topo-site-->
                        <img src="assets/undraw-guy_coding.png" alt="Icone DevCode" width="500px">
                    </div><!--img-topo-site-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--topo-do-site-->
        
        <section class="cursos"><!-- cursos -->
            <div class="interface"><!-- interface -->
                <h2 class="titulo">CURSOS</h2>

                <div class="flex"><!-- flex -->
                    <div class="cursos-cards"><!--cursos-cards-html-->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/html-5--v1.png" alt="html-5--v1"/>
                        <h3>HTML</h3>
                        <p> Aprenda a estruturar páginas web com a Linguagem de Marcação de HiperTexto (HTML)</p>
                    </div><!--end cursos-cards-html-->
                    <div class="cursos-cards"><!-- cursos-cards-css -->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/css3.png" alt="css3"/>
                        <h3>CSS</h3>
                        <p> Com a linguagem CSS você vai poder estilizar o conteúdo visual do seu site</p>
                    </div><!--end cursos-cards-css-->
                    <div class="cursos-cards"><!--cursos-cards-java-->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/javascript--v1.png" alt="javascript--v1"/>
                        <h3>JavaScript</h3>
                        <p> Linguagem de programação que permite criar interfaces interativas em páginas web</p>
                    </div><!--end cursos-cards-java-->
                </div><!-- end flex -->
                
            </div><!-- end interface -->

        </section><!-- end cursos -->
    
    </main>

    <!-- FOOTER -->
    <?php    
        require('php/footer.php');
    ?>

</body>
</html>