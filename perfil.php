<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil • Code.Dev</title>
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
    require('php/cabecalho-perfil.php');

    
    session_start();
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        
    }else{

    }
    ?>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site"><!--txt-topo-site-->
                        <h1>Perfil</h1>
                    </div>
                </div>
            </div>

            <section class="menu-perfil">
                <div class="interface">
                    <div class="flex">

                        <div class="perfil-cards">
                            <a href="pagcurso-HTML.php">   
                            <i class="bi bi-collection-play-fill"></i>
                            <h3>MEUS CURSOS</h3>
                            </a>
                        </div>

                        <div class="perfil-cards">
                            <a href="#">   
                            <i class="bi bi-person-lines-fill"></i>
                            <h3>CADASTRO</h3>
                            </a>
                        </div>

                        <div class="perfil-cards">
                            <a href="#">   
                            <i class="bi bi-question-circle-fill"></i>
                            <h3>AJUDA</h3>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        </section>
    </main>

<!-- FOOTER -->
 
<?php    
    require('php/footer.php');
?>

</body>
</html>