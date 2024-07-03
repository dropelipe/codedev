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

    require("conexao.php");

    session_start();
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $sql = $pdo->prepare("SELECT * FROM cadastro WHERE email=?");
        $sql -> execute(array($email));
        $dados = $sql -> fetchAll();

        //var_dump($dados);
        //$nome = $dados["nome"];

        foreach($dados as $chave){
                $nome = explode(" ", $chave["nome"]);
                $email = $chave["email"];
        }  
    }
    ?>

<main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site"><!--txt-topo-site-->
                        <?php 
                            echo ("<h1>Olá, <br>".$nome[0]."</h1>");
                        ?>
                        <p>Sua jornada<br>
                        <strong>Code<span>.</span>Dev</strong> começou</p>

                    </div><!--txt-topo-site-->

                    <div class="img-topo-site"><!--img-topo-site-->
                        <img src="assets/Ativo 1.png" alt="Icone DevCode" width="500px">
                    </div><!--img-topo-site-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--topo-do-site-->
        
        <section class="cursos"><!-- cursos -->
            <div class="interface"><!-- interface -->
                <h2 class="titulo">MEUS CURSOS</h2>

                <div class="flex"><!-- flex -->
                    <div class="cursos-cards"><!--cursos-cards-html-->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/html-5--v1.png" alt="html-5--v1"/>
                        <h3>HTML</h3>
                        <p> Aprenda a estruturar páginas web com a Linguagem de Marcação de HiperTexto (HTML)</p>
                        <div class="btn-play"><!--btn-login-->
                            <a href="player.php">
                                <button><i class="bi bi-play-circle"></i></button>
                            </a>
                        </div><!--btn-contato-->
                    </div><!--end cursos-cards-html-->

                    <div class="cursos-cards"><!-- cursos-cards-css -->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/css3.png" alt="css3"/>
                        <h3>CSS</h3>
                        <p> Com a linguagem CSS você vai poder estilizar o conteúdo visual do seu site</p>
                        <div class="btn-play"><!--btn-login-->
                            <a href="player.php">
                                <button><i class="bi bi-play-circle"></i></button>
                            </a>
                        </div><!--btn-contato-->

                    </div><!--end cursos-cards-css-->
                    <div class="cursos-cards"><!--cursos-cards-java-->
                        <img width="60" height="60" src="https://img.icons8.com/color/48/javascript--v1.png" alt="javascript--v1"/>
                        <h3>JavaScript</h3>
                        <p> Linguagem de programação que permite criar interfaces interativas em páginas web</p>
                        <div class="btn-play"><!--btn-login-->
                            <a href="player.php">
                                <button><i class="bi bi-play-circle"></i></button>
                            </a>
                        </div><!--btn-contato-->
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