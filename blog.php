<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <style>
            body{
                background-image: url('img/backgroundBlog.png');
            }
            .clique-aqui{
                background-color: #ffffff;
                position: absolute;
                top: 78%;
                left: 53%;
                padding: 1vw 10vw;
                font-family: 'Montserrat', sans-serif;
                font-size: 1.5vw;
                color: #5e065a;
                border-radius: 30px;
            }
            @media screen and (max-width: 768px) {
                .clique-aqui{
                    position : fixed;
                    font-size: 8vw;
                    top: 72%;
                    left: 10%;
                }
                body {
                    background-attachment: fixed; /* Faz com que o fundo fique fixo */
                    background-size: cover; /* Garante que a imagem de fundo cubra toda a tela */
                    background-position: 79% center; /* Ajusta a posição do fundo para a direita */
                    background-size: 300%; /* Diminui a imagem de fundo em 5% */
                    margin: 0;
                    padding: 0;
                    font-family: Arial, sans-serif;
                    height: 100vh;
                }
                
            }
            @media screen and (max-width: 428px) {
                .clique-aqui{
                    position : fixed;
                    font-size: 8vw;
                    top: 80%;
                    left: 10%;
                }
                
            }
        </style>
    </head>
    <body>
        <button class="btn clique-aqui" onclick="window.location.href = 'https://www.instagram.com/tech.one.br?igsh=MXBwcXVocGU0dXlpag==';">
            <b>Clique aqui</b>
        </button>
    </body>
</html>