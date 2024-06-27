<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro • Code.Dev</title>

  <link rel="stylesheet" href="css/cadastro-style.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!--END GOOGLE FONTS-->

</head>
<body>
  <div class="container-cadastro">

    <div class="form-image"></div> <!-- end form-image -->

    <div class="form">
      <form action="#">
        <div class="form-header">

          <div class="title">
            <h1>Cadastre-se</h1>
          </div>

          <div class="login-btn">
            <button><a href="#"></a>Entrar</button>
          </div>

        </div><!-- end form-header -->

        <div class="input-group">

          <div class="input-box">
            <label for="fname">Primeiro nome</label>
            <input type="text" id="fname" name="fname" placeholder="Digite seu primeiro nome" required>
          </div>

          <div class="input-box">
            <label for="lname">Sobrenome</label>
            <input type="text" id="lname" name="lname" placeholder="Digite seu sobrenome" required>
          </div>

          <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
          </div>

          <div class="input-box">
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

        <div class="gender-inputs">

          <div class="gender-title">
            <h6>Gênero</h6>
          </div>

          <div class="gender-group">

            <div class="gender-input">
              <input type="radio" id="female" name="gender">
              <label for="female">Feminino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="male" name="gender">
              <label for="male">Masculino</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="others" name="gender">
              <label for="others">Outros</label>
            </div>

            <div class="gender-input">
              <input type="radio" id="none" name="gender">
              <label for="none">Prefiro não dizer</label>
            </div>

          </div><!-- end gender-group -->

        </div><!-- end gender-input -->

        <div class="continue-btn">
        <button><a href="#"></a>Continuar</button>
        </div>

      </form>
    </div> <!-- form -->
  </div> <!-- container-cadastro -->
</body>

</html>