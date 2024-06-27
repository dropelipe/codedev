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

    <div class="form-wrapper">
        <h2>Cadastra-se</h2>

          <div class="input-group">

          <div class="form-control">

            <div class="form-control">
              <label for="fname">Primeiro nome</label>
              <input type="text" id="fname" name="fname" placeholder="Digite seu primeiro nome" required>
            </div>

            <div class="form-control">
              <label for="lname">Sobrenome</label>
              <input type="text" id="lname" name="lname" placeholder="Digite seu sobrenome" required>
            </div>

            <div class="form-control">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="form-control">
              <label for="number">Número de contato</label>
              <input type="tel" id="number" name="number" placeholder="Digite seu número de contato" required>
            </div>

            <div class="input-box">
              <label for="state">Estado</label>
              <input type="text" id="state" name="state" placeholder="Digite o estado onde você mora">
            </div>

            <div class="input-box">
              <label for="city">Cidade</label>
              <input type="text" id="city" name="city" placeholder="Digite a cidade onde você reside">
            </div>

            <div class="input-box">
              <label for="year">Ano de nascimento</label>
              <input type="number" id="year" name="year" placeholder="Digite o ano de nascimento">
            </div>

            <div class="input-box">
              <label for="education">Nível de escolaridade</label>
              <input type="text" id="education" name="education" placeholder="Digite o ano de nascimento">
            </div>

          </div><!-- end input-group -->

            <form action="#">
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-control">
                    <label>Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-help">
                    <a href="#">Esqueci minha senha</a>
                    </div>
                <button type="submit">Entrar</button>
            </form>
                <p>Ainda não tem conta?<br>
                <a href="criarconta.php">Cadastra-se agora</a></p>
    </div>
  
</body>
</html>