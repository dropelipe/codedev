<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • Code.Dev</title>
    <link rel="stylesheet" href="css/cadastro-style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--END GOOGLE FONTS-->

</head>
<body>

  <?php
  require("php/conexao.php");

  ?>

<div class="box">
        <div class="img-box">
        </div>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Já tem cadastro?<br>
            <a href="login.php"> Acesse sua conta agora </a> </p>
            <form action="#">

                <div class="input-group">
                    <label for="name"> Nome Completo</label>
                    <input type="text" id="name" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group w50">
                    <label for="number">Telefone</label>
                    <input type="tel" id="number" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                <label for="number">CEP</label>
                <input type="number" id="CEP" name="CEP" placeholder="Digite o seu CEP">
                </div>

                <div class="input-group w50">
                <label for="number">Data de Nascimento</label>
                  <input type="date" id="date" name="date" placeholder="Digite a sua Data de nascimento">
                </div>

                <div class="input-group w50">
                <label for="education">Escolaridade</label>
                  <select type="text" id="education" name="education">
                    <option value="" class="head">Selecione seu nível</option>
                    <option value="dog">Ensino Fundamental</option>
                    <option value="parrot">Ensino Médio</option>
                    <option value="spider">Ensino Superior</option>
                    </select>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <button>CADASTRAR</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>