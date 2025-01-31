<html>
    <head>

        <link rel="icon" href="img/simboloTech.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">


        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        

        <style>
            .menu {
                background-color: rgba(89, 0, 156, 0.83);
                padding: 0 3%;
                font-family: Montserrat, sans-serif;
                font-size: 16px;
                position: fixed;
                z-index: 9999;
                width: 100%;
            }

            .menu .nav-link,
            .menu .dropdown-toggle {
                color: rgba(255, 255, 255, 0.83); /* Cor branca para todos os itens de navegação */
                font-weight: bold;
                transition: all 0.3s ease; /* Suaviza a transição da sombra */
            }
            
            /* Efeito hover para os links dentro do .menu */
            .menu .nav-link:hover {
                background-color: rgba(89, 0, 156, 1);
                color: #dcdcdc; /* Cor da fonte um pouco mais escura (cinza claro) */
                box-shadow: 0px 0px 20px 4px rgba(89, 0, 156, 0.40); /* Aumentando a sombra */
                transform: scale(1.15); /* Aumentando a escala para um efeito de destaque maior */
                border-radius: 5px;
            }

            /* Estilização geral dos itens de navegação */
            .menu .nav-item .nav-link {
                color:rgba(255, 255, 255, 0.67);
                margin: 0 30px; /* Ajustei o espaçamento para mais equilíbrio */
            }
            .menu .nav-item .nav-link:hover {
                color:rgb(255, 255, 255);
            }

            /* Efeito para o item ativo */
            .menu .nav-item.active .nav-link,
            .menu .nav-item .nav-link:focus {
                color: #ffffff; /* Mantém a cor branca para o item ativo */
            }

            /* Estilização do dropdown */
            .menu .dropdown-menu {
                background-color: rgba(89, 0, 156); /* Fundo do menu dropdown */
                padding: 10px 0; /* Adicionando padding para um melhor layout */
            }

            /* Estilo para os itens do dropdown */
            .menu .dropdown-item {
                color: rgba(255, 255, 255, 0.86); /* Cor branca para itens de dropdown */
            }

            /* Efeito hover para os itens do dropdown */
            .menu .dropdown-item:hover {
                font-weight: bold; /* Deixar o texto em negrito ao passar o mouse */
                background-color: rgba(105, 0, 186, 0.8); /* Cor de fundo para o hover */
                color: #ffffff; /* Cor branca para o texto */
            }
            body {
                background-image: url('img/backgroundPadrao.png');
                background-attachment: fixed; /* Faz com que o fundo fique fixo */
                background-size: cover; /* Garante que a imagem de fundo cubra toda a tela */
                background-position: center; /* Centraliza a imagem de fundo */
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                height: 100vh;
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
            .col-md-4 img {
                opacity: 0; /* A imagem começa invisível */
                transition: opacity 1s ease-in-out; /* Animação suave de transição */
                width: 70%; /* Ajusta a largura da imagem (opcional) */
                height: auto; /* Mantém a proporção da imagem */
                margin-left: 2vw; /* Centraliza a imagem horizontalmente */
                margin-top: 10vw;
                visibility: hidden; /* Inicialmente oculta */
            }

            .col-md-4 img.visible {
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
                .menu .nav-link:hover {
                    background-color: rgba(89, 0, 156, 1);
                    color: #dcdcdc; /* Cor da fonte um pouco mais escura (cinza claro) */
                    box-shadow: 0px 0px 20px 4px rgba(89, 0, 156, 0.40); /* Aumentando a sombra */
                    transform: scale(1.05); /* Aumentando a escala para um efeito de destaque maior */
                    border-radius: 0px;
                    padding-left: 10px;
                }
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
                .col-md-4 img {
                    opacity: 0; /* A imagem começa invisível */
                    transition: opacity 1s ease-in-out; /* Animação suave de transição */
                    width: 50%; /* Ajusta a largura da imagem (opcional) */
                    height: auto; /* Mantém a proporção da imagem */
                    margin-left: 16vw; /* Centraliza a imagem horizontalmente */
                    margin-top: 18vw;
                    margin-bottom: 8vw;
                    visibility: hidden; /* Inicialmente oculta */
                }
            }

        </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark menu" >
            <a class="navbar-brand" href="http://localhost/site-techone/index.php">
                <img src="img/logoTech.png" alt="TECH ONE" class="img-fluid" style="max-height: 80px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navBarConhecaATech" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Conheça a Tech
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navBarConhecaATech">
                            <a class="dropdown-item" href="sobre_nos.php">Sobre nós</a>
                            <a class="dropdown-item" href="#">Nossas redes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navBarServicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Softwares personalizados
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navBarServicos">
                            <a class="dropdown-item" href="softwares.php">O que são softwares</a>
                            <a class="dropdown-item" href="beneficios.php">Benefícios de um Software</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orçamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/site-techone/canva.php">Duvidas frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
