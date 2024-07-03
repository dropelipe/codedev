<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso JavaScript • Code.Dev</title>

    <link rel="stylesheet" href="css/style.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--END GOOGLE FONTS-->

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- END BOOTSTRAP -->
     
    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--END BOOTSTRAP ICONS-->

</head>

<body>

    <!-- NAVBAR -->
    <?php    
    require('php/cabecalho-perfil.php');
    ?>
    
    <main>
            <!--Page Content-->
            <section class="py-5">
            <div class="interface">
                <div class="container my-5">

                    <div class="row gx-5">

                        <div class="col-xl-8">

                            <!--intro-->
                            <h2 class="fw-bolder mb-3"> Curso JavaScript</h2>
                            <p class="lead fw-normal text-muted mb-0">Curso de linguagem JavaScript, voltado para iniciantes e para quem quiser aprender mais sobre ECMAScript, a versão padronizada do JS. Em um curso patrocinado pelo Google, o professor Gustavo Guanabara vai ensinar o conteúdo básico em 6 módulos que vão desde o conhecimento da linguagem até o uso de funções.
                            <br>Em programação JavaScript, você aprende uma variedade de conceitos e técnicas fundamentais que são essenciais para desenvolver aplicações web interativas. Aqui estão alguns dos principais tópicos que você geralmente aprende ao estudar JavaScript:


                            </p>
                        </div>

                        <div class="col-xl-4">
                            <div class="card border-0 bg-light mt-xl-5">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">

                                        <div class="text-center">
                                            <div class="h6 fw-bolder">4.8
                                            <i class="bi bi-star-fill text-warning"></i>
                                            </div>
                                            <div class="text-muted mb-4">Nível: <strong>Iniciante</strong></div>
                                            <div class="text-muted mb-4">42 horas</strong></div>
                                            <div class="text-muted mb-4">19 materiais extras</strong></div>
                                            <div class="text-muted mb-4">Áudio: <strong>Português</strong></div>
                                            <div class="text-muted mb-4">Certificado de conclusão</div>
                                            

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-comece-agora btn-pagcurso"><!--btn-login-->
                    <a href="player.php">
                        <button>Começe agora!</button>
                            </a>
                        </div><!--btn-contato-->

                </div>

                <!-- accordion -->

                <div class="accordion row-accordion" id="accordionExample">

                    <h2 class="fw-bolder mb-3"> Módulos</h2>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Introdução ao JavaScript
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender</strong> Sintaxe Básica: Como escrever código JavaScript corretamente, incluindo variáveis, operadores, estruturas de controle (como if-else, switch), loops (como for, while), funções, etc. <code>ideias de funcao</code>, e ETC.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Código JavaScript
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender .</strong> Tipos de Dados: Os diferentes tipos de dados em JavaScript, <code></code>  como números, strings, booleanos, arrays, objetos, null e undefined..
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Variáveis, função e escopo
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender</strong> Funções: Como definir funções, passar argumentos para funções, retornar valores e o escopo de  <code>variáveis dentro de funções</code>,aproveite.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Tipos de JavaScript
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender</strong> Estrutura de dados do Javascript
                            Todas as linguagens de programação têm estruturas de dados embutidas, mas geralmente diferem de uma linguagem para outra. Este artigo tenta listar as estruturas de dados internas disponíveis em JavaScript e quais propriedades elas possuem. Estes podem ser usados para construir outras estruturas de dados. Sempre que possível, são feitas comparações com outras línguas. <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Linguagem JavaScript
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender</strong>  é uma poderosa linguagem de programação que pode adicionar interatividade a um site. Foi inventado por Brendan Eich. JavaScript é versátil e amigável para iniciantes. Com mais experiência, você poderá criar jogos, gráficos 2D e 3D animados,  <code>aplicativos abrangentes baseados em banco de dados e muito mais!</code>, e com exelente didatica
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Manipulação de valores padrão
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender</strong> Uma das formas mais simples de criar uma entrada de dados em JavaScript é utilizando a função prompt(), que exibe uma caixa de diálogo ao usuário para inserir os dados desejados. Veja um exemplo: let nome = prompt("Digite seu nome: "); Neste exemplo, a variável “nome” irá armazenar o valor digitado pelo usuário. <code></code>,números, strings, booleanos, objetos, arrays, null e undefined.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Criação de objetos
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>O que voce vai aprender.</strong> A linguagem de programação Javascript permite ao desenvolvedor implementar diversos itens de alto nível de complexidade em páginas web, como animações, mapas, gráficos ou informações que se atualizam em intervalos de tempo padrão <code></code>,  criar interações dinâmicas, validar formulários, manipular dados, realizar chamadas assíncronas e muito mais. Principais características do HTML: Front-end Development. Desenvolvimento de Aplicativos Móveis
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Passagem de variáveis
                        </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">Os principais tipos de dados em Javascript incluem números, strings, booleanos, objetos, arrays, null e undefined <code></code>.
                        </div>
                        </div>
                    </div>

                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Funlções, protótipo e 'this'
                        </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>são o mecanismo pelo qual objetos JavaScript herdam recursos uns dos outros. Neste artigo, explicamos como as cadeias de protótipos funcionam e observamos como a propriedade prototype pode ser usada para adicionar métodos aos construtores existentes. <code></code>
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Matrizes e fechamentos
                        </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseTen">
                            Namespaces falsos e IIFEs
                        </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwelven" aria-expanded="false" aria-controls="collapseTen">
                            Resumo do modulo
                        </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetheven" aria-expanded="false" aria-controls="collapseEleven">
                            Atividade avaliativa
                        </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                </div>

                <div class="btn-comece-agora btn-pagcurso"><!--btn-login-->
                    <a href="player.php">
                        <button>Começe agora!</button>
                    </a>
                 </div><!--btn-contato-->
           
             </div>
                

            </section>
    </main>

    <!-- FOOTER -->
    <?php    
    require('php/footer.php');
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

</script>
</body>
</html>