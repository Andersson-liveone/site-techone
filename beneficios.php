<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Benefícios</title>
        <style>
            body {
                background-image: url('img/backgroundPadrao.png');
                background-attachment: fixed; /* Faz com que o fundo fique fixo */
                background-size: cover; /* Garante que a imagem de fundo cubra toda a tela */
                background-position: center; /* Centraliza a imagem de fundo */
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            .row{
                margin-bottom: 8vw;
            }

            .container {
                max-width: 90vw;
                padding-top: 10vw;
            }

            .col-md-6 img {
                opacity: 0; /* A imagem começa invisível */
                transition: opacity 1s ease-in-out; /* Animação suave de transição */
                width: 85%; /* Ajusta a largura da imagem (opcional) */
                height: auto; /* Mantém a proporção da imagem */
                margin-left: 3vw; /* Centraliza a imagem horizontalmente */
                visibility: hidden; /* Inicialmente oculta */
            }

            .col-md-6 img.visible {
                opacity: 1; /* A imagem se torna visível */
                visibility: visible; /* Garante que a imagem apareça quando for visível */
            }

            /* Adicionando a transição para o texto */
            .titulo, .subtitulo, .conteudo {
                opacity: 0; /* O texto começa invisível */
                visibility: hidden; /* Inicialmente invisível */
                transition: opacity 1s ease-in-out; /* Transição suave */
            }

            .titulo.visible, .subtitulo.visible, .conteudo.visible {
                opacity: 1; /* O texto se torna visível */
                visibility: visible; /* Garante que o texto apareça */
            }

            .titulo {
                font-family: 'Montserrat', sans-serif;
                font-size: 2vw;
                color: #ffffff;
                font-weight: bold;
                margin-bottom: 2vw;
            }

            .subtitulo {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.5vw;
                color: #ffffff;
                font-weight: bold;
            }

            .conteudo {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.4vw;
                color: #ffffff;
                text-align: justify;
                margin-bottom: 2vw;
            }

            @media screen and (max-width: 768px) {
                .titulo {
                    font-size: 4vw;
                }

                .subtitulo {
                    font-size: 3vw;
                }

                .conteudo {
                    font-size: 2.5vw;
                }              
                ul{
                    margin-left: -7vw;
                }  
                .container {
                    max-width: 90vw;
                    padding-top: 30vw;
                }
            }


        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="img/beneficios2.png" alt="">
                </div>
                <div class="col-md-6 mb-4">

                    <p class="titulo">Benefícios dos Softwares</p>
                    <p class="conteudo"> 
                        Os softwares säo ferramentas indispensâveis que trazem inümeros beneffcios para empresas e indivfduos. Eies otimizam processos, ampliam a eficiência e tornam atividades complexas mais acessiveis e produtivas. Confira os principais beneffcios:
                    </p>

                    <p class="subtitulo">Automação de processos</p>
                    <ul>
                        <li class="conteudo">
                            Reduz o trabalho manual e elimina tarefas repetitivas, permitindo que equipes foquem em atividades estratégicas.
                        </li>
                    </ul>

                    <p class="subtitulo">Melhoria na produtividade</p>
                    <ul>
                        <li class="conteudo">
                            Ferramentas tecnológicas tornam as operaçoes mais ágeis, aumentando a eficiência e o desempenho.
                        </li>
                    </ul>


                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p class="subtitulo">Redução de custos</p>
                    <ul>
                        <li class="conteudo">
                            Automatizar e organizar processos reduz desperdícios e otimiza recursos financeiros e humanos.
                        </li>
                    </ul>
                    
                    <p class="subtitulo">Centralização e Organização de Dados</p>
                    <ul>
                        <li class="conteudo">
                            Com softwares, é possivel gerenciar informações de forma centralizada, garantindo acesso rápido e organizado.
                        </li>
                    </ul>
                    <p class="subtitulo">Tomada de Decisâo Baseada em Dados</p>
                    <ul>
                        <li class="conteudo">
                            Softwares modernos oferecem análises e relatórios detalhados, permitindo decisões mais assertivas e baseadas em informações reais.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="img/beneficios3.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4" style= "margin-left: vw;"> <!-- Usando 'mb-4' para margem inferior -->
                    <p class="subtitulo">Escalabilidade</p>
                    <ul>
                        <li class="conteudo">
                            Soluçoes tecnológicas crescem com a empresa, adaptando-se às novas demandas e volumes de    trabalho.
                        </li>
                    </ul>

                    <p class="subtitulo">Personalização</p>
                    <ul>
                        <li class="conteudo">
                            Softwares personalizados atendem às necessidades específicas de empresas, criando soluções sob medida.
                        </li>
                    </ul>

                    <p class="subtitulo">Segurança e Controle</p>
                    <ul>
                        <li class="conteudo">
                            Softwares modernos oferecem recursos avançados de segurança, protegendo dados sensíveis e   garantindo maior controle sobre às operações.
                        </li>
                    </ul>

                    <p class="subtitulo">Competitividade no Mercado</p>
                    <ul>
                        <li class="conteudo">
                            Empresas que utilizam softwares ganham vantagem competitiva, pois conseguem oferecer melhores serviços e se adaptar rapidamente às mudanças do mercado.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="img/beneficios1.png" alt="" class="img-fluid"> 
                </div>
            </div>

        </div>

    </body>

</html>
<script>
    // Função para verificar se os elementos estão visíveis na tela
    function checkVisibility() {
        var images = document.querySelectorAll('.col-md-6 img');
        var texts = document.querySelectorAll('.titulo, .subtitulo, .conteudo'); // Seleciona os textos
        var windowHeight = window.innerHeight;
    
        // Verifica a visibilidade das imagens
        images.forEach(function(image) {
            var imageTop = image.getBoundingClientRect().top;
            var imageBottom = image.getBoundingClientRect().bottom;
        
            if (imageTop < windowHeight && imageBottom >= 0) {
                image.classList.add('visible');
            }
        });
    
        // Verifica a visibilidade dos textos
        texts.forEach(function(text) {
            var textTop = text.getBoundingClientRect().top;
            var textBottom = text.getBoundingClientRect().bottom;
        
            if (textTop < windowHeight && textBottom >= 0) {
                text.classList.add('visible');
            }
        });
    }
    // Adiciona a detecção de scroll
    window.addEventListener('scroll', checkVisibility);
    // Verifica a visibilidade ao carregar a página
    window.addEventListener('load', checkVisibility);
</script>

<!-- Reduçao de Custos
• Automatizar e organizar processos reduz desperdicios e otimiza recursos financeiros e humanos.
Centralizaçao e Organizaçao de Dados
•	Com softwares, é possivel gerenciar informaçoes de forma centralizada, garantindo acesso râpido e organizado.
Tomada de Decisâo Baseada em Dados
•	Softwares modernos oferecem anâlises e relatörios detalhados, permitindo decisoes mais assertivas e baseadas em informaçoes reais. -->