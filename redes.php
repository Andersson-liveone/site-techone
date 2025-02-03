<?php
    include('template_start.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nossas redes</title>
        <style>
            body{
                background-image: url('img/backgroundRedes.png');
            }
            .nos-siga{
                font-family: 'Montserrat', sans-serif;
                font-size: 2vw;
                color: #ffffff;
                margin-bottom: 2vw;
            }
            .icones{
                max-width: 4vw;
            }
            .rede{
                font-family: 'Montserrat', sans-serif;
                font-size: 1.4vw;
                color: #ffffff;
                text-align: justify;
                margin-bottom: 0;
            }
            .caixa-conteudo {
                display: flex;
                justify-content: center;
                background-color: #5e065a;
                border-radius: 30px;
                padding: 1vw;
            }

            /* Classe para visibilidade */
            .caixa-conteudo, .nos-siga {
                opacity: 0; /* Inicia invisível */
                visibility: hidden; /* Inicialmente invisível */
                transition: opacity 1s ease-in-out; /* Animação suave */
            }

            /* Quando o elemento entra na tela, ele se torna visível */
            .caixa-conteudo.visible, .nos-siga.visible {
                opacity: 1; /* Torna visível */
                visibility: visible; /* Garante que o elemento fique visível */
            }
            .col-md-4 {
                margin-bottom: 0; /* Remove a margem da coluna */
            }
            @media screen and (max-width: 768px) {
                .nos-siga{
                    font-size: 4vw;
                }
                .col-md-6{
                    max-width: 60%;
                }
                .col-md-4{
                    max-width: 60%;
                }
                .icones{
                    max-width: 10vw;
                    margin-bottom: 2vw;
                }
                .rede{
                    font-size: 3vw;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-end" style="padding-bottom: 0">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <p class="nos-siga">Nos <b>siga</b> nas <b>redes sociais</b> e fique ligado</p>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-2 ">
                            <img src="img/instagram.png" alt="" class="img-fluid icones">
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="caixa-conteudo">
                                <a href="https://www.instagram.com/tech.one.br?igsh=MXBwcXVocGU0dXlpag==" class="rede">@tech.one.br</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-2 ">
                            <img src="img/facebook.png" alt="" class="img-fluid icones">
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="caixa-conteudo">
                                <a href="https://www.facebook.com/profile.php?id=61560483996013" class="rede">Tech One</a>
                            </div>
                        </div>
                    </div>                    
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-2 ">
                            <img src="img/linkedln.png" alt="" class="img-fluid icones">
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="caixa-conteudo">
                                <a href="https://www.linkedin.com/company/tech-one-br" class="rede">Tech One</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-2 ">
                            <img src="img/tiktok.png" alt="" class="img-fluid icones">
                        </div>
                        <div class="col-md-4 mb-1">
                            <div class="caixa-conteudo">
                                <a href="https://www.tiktok.com/@techone.oficial " class="rede">Tech One</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <p class="nos-siga"><b>Conteúdos</b> diários</p>
                    </div>
                </div>
        </div>
    </body>

</html>
<script>
    function checkVisibility() {
        var images = document.querySelectorAll('.col-md-6 img');
        var texts = document.querySelectorAll('.titulo, .subtitulo, .conteudo, .caixa-conteudo, .nos-siga'); // Seleciona os textos
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