<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code.Dev • Cursos gratuitos de programação</title>
    <link rel="stylesheet" href="css/style.css">

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
    <!-- Apresentação -->
     <section>
        <div class="interface">
            <div class="margin">
                <div class="txt-sobre">
                    <h2 class="fw-bolder">Nossa missão é democratizar o acesso
                        <br>ao conhecimento tecnológico</h2>
                <div class="txt-base">
                    <p>Na <span>Code.Dev</span>, acreditamos que a prática é fundamental. Por isso, nossos cursos são projetados para fornecer uma experiência de aprendizado prática e envolvente, com projetos reais, exercícios desafiadores e suporte contínuo de instrutores experientes. 
                </div>
                </div>

            </div>
        </div>
     </section>

     <section class="numeros">
        <div class="interface">
            <div class="title-numeros">
            <h1> Code.Dev em números</h1></div>

            <div class="row-2">
                <div class="column">
                    <h1>+100 mil</h1> <br> <p>alunos ativos</p>
                </div>
                <div class="column">
                    <h1>+5 mil</h1> <br> <p>horas de conteúdo</p>
                </div>
                <div class="column">
                    <h1>+500 mil</h1> <br> <p>de seguidores</p>
                </div>
            </div>
        </div>
     </section>

    <!-- Team members section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder">Nosso time</h2>
                    <p class="lead fw-normal text-muted mb-5">Dedicado à qualidade e ao seu sucesso</p>
                  </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="assets/Rodolfo Eligard.png" alt="..." />
                            <h5 class="fw-bolder">Rodolfo Eligard</h5>
                        <div class="fst-italic text-muted">Fundador &amp; CEO</div>
                        </div>
                        </div>
                        
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="assets/Savannah Nguyen.png" alt="..." />
                                <h5 class="fw-bolder">Savannah Nguyen</h5>
                                <div class="fst-italic text-muted">Co-Fundadora &amp; CFO</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="assets/Leslie Alexander.png" alt="..." />
                                <h5 class="fw-bolder">Leslie Alexander</h5>
                                <div class="fst-italic text-muted">Operations Manager</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="assets/Hoon Ryu.png" alt="..." />
                                <h5 class="fw-bolder">Hoon Ryu</h5>
                                <div class="fst-italic text-muted">CTO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

<!-- FOOTER -->
 
<?php    
    require('php/footer.php');
?>

</body>
</html>