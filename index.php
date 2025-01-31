<?php
    include('template_start.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
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
                background-image: url('img/backgroundHome2.png');
            }

            .carousel-item:nth-child(3) {
                background-image: url('img/backgroundHome3.png');
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
                background-color: #5e065a; /* Cor das bolinhas */
                border-radius: 50%; /* Forma de bolinha */
                width: 1vw; /* Largura das bolinhas */
                height: 1vw; /* Altura das bolinhas */
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
            .texto-boas-vindas2 {
                text-align: justify;
                color: #ffffff;
                position: absolute;
                top: 50%;
                left: 75%;
                transform: translate(-50%, -50%);
            }
            .texto-boas-vindas3 {
                color: #ffffff;
                position: absolute;
                top: 30%;
                left: 48%;
                transform: translate(-75%, -75%);
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
            .font-3 {
                font-family: 'Montserrat', sans-serif;
                font-size: 2vw; /* A fonte será 8% da largura da tela */
                margin: 0;
            }
            .font-4 {
                font-family: 'Montserrat', sans-serif;
                font-size: 2.5vw; /* A fonte será 8% da largura da tela */
                margin: 0;
            }
            .font-5 {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.1vw; /* A fonte será 8% da largura da tela */
                margin: 0;
                color: #ffffff;
            }
            .techone {
                max-height: 12vw;
                width: auto;
                margin-top: -2vw;
            }


            .logo{
                max-height: 8vw; 
                width: auto;
            }
            .fundo-roxo {
                padding: 1.5vw 3vw;
                background-color: rgba(128, 0, 255, 0.2); /* Roxo com transparência */
                width: 70%; /* Largura da div */
                height: 45%; /* Altura da div */
                border-radius: 10px; /* Bordas arredondadas, opcional */
                backdrop-filter: blur(10px); /* Efeito de desfoque do fundo */
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .item{
                margin-bottom: 2vw;
            }

            /* Adicionando uma responsividade maior para telas pequenas */
            @media (max-width: 768px) {
                .font-1 {
                    font-size: 12vw; /* Ajusta a fonte para 12% da largura da tela em telas menores */
                }
            
                .font-2 {
                    font-size: 10vw; /* Ajusta a fonte para 10% da largura da tela em telas menores */
                }
                .font-3 {
                    font-size: 4vw; /* Ajusta a fonte para 10% da largura da tela em telas menores */
                    margin-left: 9vw;
                }
                .font-4 {
                    font-size: 5vw; /* Ajusta a fonte para 10% da largura da tela em telas menores */
                }
                .font-5 {
                    font-size: 3vw; /* Ajusta a fonte para 10% da largura da tela em telas menores */
                }
                .texto-boas-vindas3 {
                    color: #ffffff;
                    position: absolute;
                    top: 30%;
                    left: 53%;
                    transform: translate(-75%, -75%);
                }

                .techone {
                    max-height: 30vw;
                    width: auto;
                    margin-top: -2vw;
                }
                .logo{
                    max-height: 12vw;
                    width: auto;
                    margin-left: -10px;
                }
            }

            @media (max-width: 480px) {
                .font-1 {
                    font-size: 10vw; /* Ajusta ainda mais a fonte para telas muito pequenas */
                }
            
                .font-2 {
                    font-size: 8vw; /* Ajusta a fonte para telas muito pequenas */
                }

                .font-3 {
                    font-size: 4vw; /* Ajusta a fonte para telas muito pequenas */
                    margin-left: 9vw;
                }
                .font-4 {
                    font-size: 5vw; /* Ajusta a fonte para telas muito pequenas */
                }
                .font-5 {
                    font-size: 3vw; /* Ajusta a fonte para telas muito pequenas */
                }
                .texto-boas-vindas3 {
                    color: #ffffff;
                    position: absolute;
                    top: 30%;
                    left: 53%;
                    transform: translate(-75%, -75%);
                }

                .techone {
                    max-height: 30vw;
                    width: auto;
                    margin-top: -2vw;
                }
                .logo{
                    max-height: 12vw;
                    width: auto;
                    margin-left: -10px;
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
                            <img src="img/logoTech.png" alt="TECH ONE" class="img-fluid techone">

                        </div>
                    </div>

                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="texto-boas-vindas2 col-md-8 d-flex justify-content-start">
                            <img src="img/simboloTech.png" alt="TECH ONE" class="img-fluid logo">
                        </div>
                        <div class="texto-boas-vindas2 col-md-6">
                            <p class="font-3">Soluções <b>Personalizadas</b> em</p>
                            <p class="font-3"><b>Softwares</b> para a sua <b>Empresa</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="texto-boas-vindas3">
                    <p class="font-4"><b>Benefícios</b> de ter <b>Softwares</b></p>
                    <p class="font-4"><b>Personalizados</b> para a sua <b>Empresa</b></p>
                </div>
                <div class="fundo-roxo">
                    <div class="row item">
                        <div class="col-md-12">
                            <p class="font-5"><b>Soluções sob medida</b></p>
                            <p class="font-5">Atendem exatamente às necessidades do seu negôcio, sem recursos genéricos ou desnecessérios.</p>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-12">
                            <p class="font-5"><b>Integração perfeita</b></p>
                            <p class="font-5">Conectam diferentes sistemas e departamentos, otimizando o fluxo de trabalho e centralizando informaçoes.</p>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-12">
                            <p class="font-5"><b>Reduçâo de custos a longo prazo</b></p>
                            <p class="font-5">Com funcionalidades especificas. evitam desperdicios e investimentos em soluçoes genéricas pouco eficientes.</p>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-12">
                            <p class="font-5"><b>Vantagem competitiva</b></p>
                            <p class="font-5">Oferecem ferramentas exclusivas que colocam sua empresa à frente no mercado.</p>
                        </div>
                    </div>
                </div>

            </div>
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
    </body>
</html>