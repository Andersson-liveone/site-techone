<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Softwares</title>

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
                margin-left: 3vw;
            }

            .conteudo {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.2vw;
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
                    <p class="titulo">O que são softwares?</p>
                    <p class="conteudo">
                        <ul>
                            <li class="conteudo">
                                Os softwares säo ferramentas tecnológicas essenciais que compõem o funcionamento de dispositivos eletronicos, como computadores, smartphones e sistemas corporativos. De maneira simples, um software é um conjunto de instruçoes e códigos programados que determinam como o hardware deve executar tarefas específicas.
                            </li>
                            <li class="conteudo">
                                No ambiente corporativo, os softwares desempenham um papel crucial na automação de processos, organização de informações, otimização de recursos e melhoria da tomada de decisão. A personalização e a integração dessas ferramentas podem transformar a eficiência operacional, proporcionando competitividade e inovação para as empresas.
                            </li>
                            <li class="conteudo">
                                Em resumo, os softwares säo mais do que cõdigos: säo soluçoes que conectam pessoas, processos e tecnologia para alcançar resultados extraordinários.
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="img/softwares.png" alt="" class="img-fluid">
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