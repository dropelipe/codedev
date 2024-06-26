<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Cadastro • Code.Dev</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="css/criarconta-style.css">

</head>
<body>
    <div class="container" id="container">
        
        <div class="form-container sign-in-container">

            <h2>Criar conta</h2>

            <hr>
            
            <input type="text" placeholder="Insira nome completo" name="name" id="name" required>

            <input type="text" placeholder="Insira a cidade onde você reside" name="cidade" id="cidade" required>

            <input type="text" placeholder="Insira o estado onde você reside" name="estado" id="estado" required>

            <input type="text" placeholder="Insira o seu ano de nascimento" name="anonasc" id="anonasc" required>

            <input type="text" placeholder="Insira o seu nível de escolaridade" name="escolaridade" id="escolaridade" required>

            <input type="text" placeholder="Insira o seu sexo" name="sexo" id="sexo" required>

            <input type="text" placeholder="Insira seu número de contato" name="telefone" id="telefone" required>

            <input type="text" placeholder="Insira email" name="email" id="email" required>

            <input type="password" placeholder="Criar senha" name="psw" id="psw" required>

            <hr>

            <button type="submit" class="registerbtn">Criar minha conta</button>
        
        </div>
    
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <div><!--logo-->
                    <a href="index.html"></a>
                </div><!--end logo-->

            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>