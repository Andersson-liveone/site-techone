<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Softwares</title>

        <style>

            .conteudo {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.2vw;
                color: #ffffff;
                text-align: justify;
                margin-bottom: 2vw;
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