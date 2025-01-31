<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre nós</title>
        <style>

            .container {
                padding-top: 10vw;
                padding-left: 10vw;
            }

            .caixa-titulo {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #5e065a;
                border-top-left-radius: 30px; /* Arredonda apenas a ponta superior esquerda */
                border-top-right-radius: 30px; /* Arredonda apenas a ponta superior direita */
                padding: 30px;
                margin-bottom: 10px;
            }

            .caixa-conteudo {
                background-color: rgba(89, 0, 156, 0.83);
                border-bottom-left-radius: 30px; /* Arredonda apenas a ponta inferior esquerda */
                border-bottom-right-radius: 30px; /* Arredonda apenas a ponta inferior direita */
                padding: 2vw 4vw;
            }

            /* Classe para visibilidade */
            .titulo-caixa, .caixa-titulo, .caixa-conteudo {
                opacity: 0; /* Inicia invisível */
                visibility: hidden; /* Inicialmente invisível */
                transition: opacity 1s ease-in-out; /* Animação suave */
            }

            /* Quando o elemento entra na tela, ele se torna visível */
            .titulo-caixa.visible, .caixa-titulo.visible, .caixa-conteudo.visible {
                opacity: 1; /* Torna visível */
                visibility: visible; /* Garante que o elemento fique visível */
            }

            .titulo-caixa {
                font-family: 'Montserrat', sans-serif;
                font-size: 2.5vw;
                color: #ffffff;
                font-weight: bold;
                margin: 0;
            }

            @media screen and (max-width: 768px) {
                .titulo-caixa {
                    font-size: 4vw;
                }
            }

        </style>            
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/techSimbolo.png" alt="">
                </div>
                <div class="col-md-8">
                    <div class="row caixa-titulo" style="margin-bottom: 0;">
                        <p class="titulo-caixa">Sobre a <b>Tech One</b></p>
                    </div>
                    <div class="row caixa-conteudo">
                        <p class="conteudo">
                            A Tech One nasceu com o desejo de empreender em desenvolvimento, inovaçào e projetos tecnolögicos, sempre focada em transformar ideias em soluçoes de alto impacto.
                        </p>
                        <p class="conteudo">
                            Criar uma estrutura sölida e eficiente para impulsionar o potencial de tecnologia e inovaçào, ajudando empresas a crescerem com processos mais âgeis, conectados e inteligentes.
                        </p>
                        <p class="conteudo">
                            Na Tech One, construímos o futuro com tecnologia de ponta e inovaçào que realmente faz a diferença.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    // Função para verificar se os elementos estão visíveis na tela
    function checkVisibility() {
        var elements = document.querySelectorAll('.titulo-caixa, .conteudo, .caixa-titulo, .caixa-conteudo, img'); //   Seleciona todos os elementos

        var windowHeight = window.innerHeight;

        elements.forEach(function(element) {
            var elementTop = element.getBoundingClientRect().top;
            var elementBottom = element.getBoundingClientRect().bottom;

            // Verifica se o elemento está visível na tela
            if (elementTop < windowHeight && elementBottom >= 0) {
                element.classList.add('visible'); // Adiciona a classe para tornar o elemento visível
            }
        });
    }

    // Adiciona a detecção de scroll
    window.addEventListener('scroll', checkVisibility);

    // Verifica a visibilidade ao carregar a página
    window.addEventListener('load', checkVisibility);

</script>

