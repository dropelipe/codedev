<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Andev web - Validar formulario</title>
    <link rel="stylesheet" href="css/estilologintst.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container register-container">
        <form>
          <h1>Criar conta grátis</h1>
          <div class="form-control">
            <input type="text" id="username" placeholder="User" />
            <small id="username-error"></small>
            <span></span>
          </div>
          <div class="form-control">
            <input type="email" id="email" placeholder="Email" />
            <small id="email-error"></small>
            <span></span>
          </div>
          <div class="form-control">
            <input type="password" id="password" placeholder="Senha" />
            <small id="password-error"></small>
            <span></span>
          </div>
          <button type="submit" value="submit">Criar</button>
        </form>
      </div>

      <div class="form-container login-container">
        <form class="form-lg">
          <h1>Acesse sua conta</h1>
          <div class="form-control2">
            <input type="email" class="email-2" placeholder="Email" />
            <small class="email-error-2"></small>
            <span></span>
          </div>
          <div class="form-control2">
            <input type="password" class="password-2" placeholder="Senha" />
            <small class="password-error-2"></small>
            <span></span>
          </div>

          <div class="content">
            <div class="pass-link">
              <a href="#">Esqueci minha senha</a>
            </div>
          </div>
          <button type="submit" value="submit">Entrar</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">
              Olá,
            </h1>
            <p>Já tem uma conta, continue sua jornada dev aqui!</p>
            <button class="ghost" id="login">
              Acessar conta
              <i class="fa-solid fa-arrow-left"></i>
            </button>
          </div>

          <div class="overlay-panel overlay-right">
            <h1 class="title">
              Comece sua<br />
              jornada dev agora
            </h1>
            <p> Não tem conta, comece sua jornada dev agora!</p>
            <button class="ghost" id="register">
              Criar conta
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/logintst.js"></script>
</html>