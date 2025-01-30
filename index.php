<?php
    include('template_start.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carrossel com Indicadores</title>
        <style>
            /* Definindo o tamanho e o estilo do carrossel */
            .carousel-item {
                height: 100vh; /* Ajusta o carrossel para cobrir toda a altura da tela */
                background-size: cover; /* Faz com que a imagem de fundo cubra toda a área */
                background-position: center center; /* Centraliza a imagem */
            }

            /* Definindo as imagens de fundo para cada slide */
            .carousel-item:nth-child(1) {
                background-image: url('img/backgroundHome.png');
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .carousel-item:nth-child(2) {
                background-image: url('img/backgroundHome.png');
            }

            .carousel-item:nth-child(3) {
                background-image: url('img/backgroundHome.png');
            }

            /* Estilo para o conteúdo do carrossel */
            .carousel-caption {
                background-color: rgba(0, 0, 0, 0.5); /* Fundo transparente para o texto */
                padding: 20px;
                border-radius: 5px;
            }

            /* Estilo para os indicadores (bolinhas) do carrossel */
            .carousel-indicators {
                bottom: 20px; /* Coloca os indicadores na parte inferior */
            }

            .carousel-indicators li {
                background-color: rgba(255, 255, 255, 0.6); /* Cor das bolinhas */
                border-radius: 50%; /* Forma de bolinha */
            }

            .carousel-indicators .active {
                background-color: #ffffff; /* Cor das bolinhas ativas */
            }

            .texto-boas-vindas1 {
                text-align: center;
                color: #ffffff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .font-1 {
                font-family: 'Montserrat', sans-serif;
                font-size: 3vw; /* A fonte será 8% da largura da tela */
                margin: 0;
            }

            .font-2 {
                font-family: 'Montserrat', sans-serif;
                font-size: 2vw; /* A fonte será 6% da largura da tela */
                margin: 0;
            }

            /* Adicionando uma responsividade maior para telas pequenas */
            @media (max-width: 768px) {
                .font-1 {
                    font-size: 12vw; /* Ajusta a fonte para 12% da largura da tela em telas menores */
                }
            
                .font-2 {
                    font-size: 10vw; /* Ajusta a fonte para 10% da largura da tela em telas menores */
                }
            }

            @media (max-width: 480px) {
                .font-1 {
                    font-size: 10vw; /* Ajusta ainda mais a fonte para telas muito pequenas */
                }
            
                .font-2 {
                    font-size: 8vw; /* Ajusta a fonte para telas muito pequenas */
                }
            }

        </style>
    </head>
    <body>

    <!-- Carrossel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <!-- Indicadores do carrossel (bolinhas) -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="texto-boas-vindas1">
                            <p class="font-1">Bem-vindo ao <b>Futuro</b></p>
                            <p class="font-2">da <b>Tecnologia</b> e <b>software</b></p>
                            <img src="img/logoTech.png" alt="TECH ONE" class="img-fluid" style="max-height: 12vw; width: auto; margin-top: -2vw;">

                        </div>
                    </div>

                </div>
            </div>
            <!-- Slide 2 -->
            <!-- <div class="carousel-item">
                
            </div> -->
            <!-- Slide 3 -->
            <!-- <div class="carousel-item">
                
            </div> -->
        </div>

        <!-- Controles de navegação -->
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="container"></div>
    </body>
</html>
