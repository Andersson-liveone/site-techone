<html>
    <head>

        <link rel="icon" href="img/simboloTech.png" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
                            <a class="dropdown-item" href="#">Sobre nós</a>
                            <a class="dropdown-item" href="#">Nossas redes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navBarServicos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Softwares personalizados
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navBarServicos">
                            <a class="dropdown-item" href="#">O que são softwares</a>
                            <a class="dropdown-item" href="#">Benefícios de um Software</a>
                            <a class="dropdown-item" href="#">Python</a>
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
