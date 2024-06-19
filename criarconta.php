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
            
            <input type="text" placeholder="Insirir nome completo" name="name" id="name" required>

            <input type="text" placeholder="Insira email" name="email" id="email" required>

            <input type="password" placeholder="Criar senha" name="psw" id="psw" required>
        
            <input type="password" placeholder="Confirmar senha" name="psw-repeat" id="psw-repeat" required>

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