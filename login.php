<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Code.Dev</title>
    <link rel="stylesheet" href="css/login-style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--END GOOGLE FONTS-->

</head>
<body>
<?php
require("conexao.php");


    session_start();

    if(isset($_POST['email-codedev']) && isset($_POST['pswrd-codedev'])){
        $email = $_POST['email-codedev'];
        $senha = md5($_POST['pswrd-codedev']);

/*INFORMAÇÕES DO BANCO + html*/ 
        echo"teste";
        $sql = $pdo->prepare("SELECT email, pswrd FROM cadastro WHERE email=? AND pswrd=?");
        $sql -> execute(array($email, $senha));
        $dados = $sql -> fetchAll();

        if(count($dados)==1){
        $_SESSION['email'] = $email;
        header('location:perfil.php');
        } elseif (count($dados)==0){
        echo(
        '<script> alert("Usuário ou senha incorretos"); </script>;'
        );
        header('location:index.php');
        }
    }

?>

<div class="form-wrapper">
    <h2>Entrar</h2>

        <form method="post">
            <div class="form-control">
                <label for="email">Email</label>
                    <input type="email" id="email" name="email-codedev" required>
            </div>

            <div class="form-control">
                <label>Senha</label>
                    <input type="password" id="password" name="pswrd-codedev" required>
            </div>

            <div class="form-help">
                <a href="#">Esqueci minha senha</a>
            </div>

            <button type="submit">Entrar</button>
        </form>

        <p>Ainda não tem conta?<br>

        <a href="cadastro.php">Cadastra-se agora</a></p>
</div>

  
</body>
</html>