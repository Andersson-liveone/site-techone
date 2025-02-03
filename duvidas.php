<?php
    include('template_start.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dúvidas</title>
        <style>
            .conteudo {
                max-height: 0;
                opacity: 0;
                overflow: hidden;
                transform: translateY(-20px);
                transition: max-height 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 10px;
            }
            .subtitulo {
                cursor: pointer;
            }
            .conteudo.mostrar {
                max-height: 500px; /* Valor grande o suficiente para o conteúdo */
                opacity: 1;
                transform: translateY(0);
                padding: 1vw;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var subtitulos = document.querySelectorAll('.subtitulo');

                subtitulos.forEach(function(subtitulo) {
                    subtitulo.addEventListener('click', function() {
                        var conteudo = this.nextElementSibling;
                        conteudo.classList.toggle('mostrar');
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h1 class="titulo">Dúvidas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                       <b>1.</b> O software pode ser usado por vários usuários simultaneamente? ▾
                    </p>
                    <p class="conteudo">
                        Sim! A Tech One desenvolve softwares que permitem múltiplos acessos simultâneos, garantindo que toda a sua equipe possa trabalhar de forma eficiente e integrada, sem comprometer o desempenho do sistema.
                    </p>
                </div>
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                        <b>2.</b> O sistema pode gerar relatórios personalizados de acordo com minhas necessidades? ▾
                    </p>
                    <p class="conteudo">
                        Sim. O sistema da Tech One pode gerar relatórios personalizados de acordo com as necessidades do contratante. Basta solicitar durante o desenvolvimento ou personalização para que as funcionalidades atendam exatamente ao que sua empresa precisa.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                        <b>3.</b> O software é indicado para pequenas empresas ou apenas para grandes corporações? ▾
                    </p>
                    <p class="conteudo">
                        Com certeza! Os softwares da Tech One são projetados para atender empresas de todos os portes, desde pequenos negócios até grandes corporações. O diferencial está na personalização: o sistema é ajustado conforme o tamanho da operação e as demandas específicas de cada cliente.
                    </p>
                </div>
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                        <b>4.</b> O que é um software personalizado? ▾
                    </p>
                    <p class="conteudo">
                        Um software personalizado é uma solução desenvolvida sob medida para atender às necessidades específicas de uma empresa. Diferente dos sistemas prontos, que possuem funcionalidades genéricas, o software personalizado da Tech One é construído com base nos processos, fluxos de trabalho e objetivos do seu negócio, oferecendo mais eficiência e resultados.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                        <b>5.</b> Qual a diferença entre um software personalizado e um software pronto? ▾
                    </p>
                    <p class="conteudo">
                        Software Pronto: Já vem com funcionalidades definidas, que podem não atender 100% das suas necessidades. Pode ser mais rápido de implementar, mas é menos flexível.
                        Software Personalizado: Desenvolvido do zero para o seu negócio, com funcionalidades específicas que se adaptam à sua realidade. Oferece mais flexibilidade, escalabilidade e eficiência, além de acompanhar o crescimento da sua empresa.
                    </p>
                </div>
                <div class="col-md-6 mb-3">
                    <p class="subtitulo">
                        <b>6.</b> O que é um software personalizado? ▾
                    </p>
                    <p class="conteudo">
                        Um software personalizado é uma solução desenvolvida sob medida para atender às necessidades específicas de uma empresa. Diferente dos sistemas prontos, que possuem funcionalidades genéricas, o software personalizado da Tech One é construído com base nos processos, fluxos de trabalho e objetivos do seu negócio, oferecendo mais eficiência e resultados.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
