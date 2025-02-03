<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fale conosco</title>
        <style>
            body{
                background-image: url('img/backgroundFaleConosco.png');
            }
            .caixa-form {
                display: flex;
                justify-content: center;
                background-color: #231f20;
                border-radius: 30px;
                padding: 2vw;
            }

            /* Classe para visibilidade */
            .caixa-form{
                opacity: 0; /* Inicia invisível */
                visibility: hidden; /* Inicialmente invisível */
                transition: opacity 1s ease-in-out; /* Animação suave */
            }

            /* Quando o elemento entra na tela, ele se torna visível */
            .caixa-form.visible{
                opacity: 1; /* Torna visível */
                visibility: visible; /* Garante que o elemento fique visível */
            }
            .botao {
                display: flex;
                justify-content: center;
                align-items: center; /* Centraliza o texto verticalmente */
                background-color: #8300a9; /* Fundo branco */
                color:rgb(255, 255, 255); /* Texto escuro para contraste */
                border: 2px solid #231f20; /* Borda escura para destacar o botão */
                border-radius: 30px;
                padding: 1vw 5vw; /* Ajuste de padding para melhor proporção */
                font-weight: bold; /* Texto em negrito para mais destaque */
                text-decoration: none; /* Remove sublinhado caso seja um link */
                cursor: pointer; /* Cursor de mão para indicar interatividade */
                transition: background-color 0.3s, color 0.3s; /* Animação suave */
            }

            /* Efeito hover para interação */
            .botao:hover {
                background-color:rgb(200, 0, 255); /* Fundo escuro ao passar o mouse */
                color: #ffffff; /* Texto branco para contraste */
            }

            @media screen and (max-width: 768px) {
                .botao {
                    padding: 1vw 3vw; /* Ajuste de padding para dispositivos menores */
                }
                .caixa-form{
                    padding: 8vw;
                }
                .caixa-titulo{
                    display: flex;
                    justify-content:end;
                    padding-right: 8vw;
                }
                .titulo{
                    font-size: 5vw;
                }
                
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="row mb-3 mt-2 caixa-titulo">
                        <p class="titulo">Entre em <b>contato</b></p>
                    </div>
                    <div class="row">
                        <div class="caixa-form">
                            <form action="enviar_email.php" method="post">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="ramo" id="ramo" class="form-control" required>
                                                <option value="" disabled selected>Selecione seu ramo*</option>
                                                <option value="Saúde">Saúde (Hospitais, Clínicas e Consultórios)</option>
                                                <option value="Educação">Educação (Escolas, Faculdades e Cursos Online)</option>
                                                <option value="Varejo">Varejo (Lojas de Comércio, E-commerce, Supermercados)</option>
                                                <option value="Logistica">Logística e Transporte</option>
                                                <option value="Financas">Finanças e Contabilidade (Instituições Financeiras, Contadores e Gestores de Patrimônio)</option>
                                                <option value="Industria">Indústria e Manufatura (Fábricas, Produção, Automação)</option>
                                                <option value="Outros">Outros</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select name="codigo_pais" id="codigo_pais" class="form-control" required>
                                                <option value="" disabled selected>+*</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="mensagem" class="form-control" id="mensagem" rows="3" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <button type="submit" class="botao">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        function checkVisibility() {
            var elements = document.querySelectorAll('.caixa-form');
            var windowHeight = window.innerHeight;
            elements.forEach(function(element) {
                var rect = element.getBoundingClientRect();
                if (rect.top < windowHeight && rect.bottom >= 0) {
                    element.classList.add('visible');
                }
            });
        }
        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('load', checkVisibility);
        
        $(document).ready(function() {
            $('#telefone').mask('(00) 00000-0000');
        });
        
        $('form').on('submit', function(e) {
            var telefone = $('#telefone').val();
            if (telefone.length < 15) { // (00) 00000-0000 tem 15 caracteres
                alert('Por favor, preencha o telefone completo.');
                e.preventDefault(); // Impede o envio do formulário
            }
            else{
                alert('Mensagem enviada com sucesso!');
                window.location.href = 'index.php';
            }
        });
        fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            const select = document.getElementById('codigo_pais');

            // Filtra países com código de discagem válido e cria um array de objetos
            const countriesWithCodes = data
                .filter(country => country.idd && country.idd.root)
                .map(country => ({
                    code: `${country.idd.root}${country.idd.suffixes[0] || ''}`,
                    name: country.name.common
                }));

            // Ordena pelo código em ordem crescente
            countriesWithCodes.sort((a, b) => {
                return parseInt(a.code.replace(/\D/g, '')) - parseInt(b.code.replace(/\D/g, ''));
            });

            // Adiciona as opções ao <select>
            countriesWithCodes.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.text = `${country.code} (${country.name})`;
                select.appendChild(option);
            });
        })
        .catch(error => console.error('Erro ao carregar códigos:', error));
    
    </script>
</html>