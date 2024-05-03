<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../contacto/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../Assets/img/favicon_io/favicon.ico" type="image/x-icon">
    <title>HackerSec - Cibersegurança Avançada</title>
    <link rel="stylesheet" href="../global.css">
    <style>
        #container {
            position: relative;
            width: 100%;
            height: 100%;
            /* Ajuste conforme necessário */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }

        #container #nav {
            background-color: black;
        }

        #container div#content {
            height: 100%;
            width: 95%;
            text-align: justify;
            color: #453e43;
        }

        #container div#content p {
            color: black;
            z-index: 100;
            margin-top: 13rem;
            color: #453e43;
        }

    </style>
</head>

<body>
<?php include("../pre-loader.php");?>


    <div id="container">
        <div id="img-topo">

        </div>
        <div class="overlay"></div>

        <div id="nav">
            <div id="nav-fixed" class="transparent">
                <div id="menu-navegacao-left" class="container" onclick="toggleMenu()">
                    <div class="menu-toggle">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <ul id="navegacao" class="dropdown-content">
                        <li><a href="sobre.html">Sobre Nos</a></li>
                        <li><a href="#">Auditoria e Consulta</a></li>
                        <li><a href="#">Treinamentos</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div id="menu-image-center">
                    <img src="/Assets/img/logo.png" alt="logo" class="logo">
                </div>

                <div id="menu-opcoes-right">
                    <img src="/Assets/img/do-utilizador.png" alt="Ícone de usuário" class="user-icon" id="user-icon">
                    <ul id="dropdown">
                        <li><a href="#">Sou Empresa</a></li>
                        <li><a href="">Sou Aluno</a></li>
                    </ul>
                </div>
            </div>



        </div>

        <div id="overlay" onclick="closeMenu()"></div>


        <div id="content">
            <p>
                <b>Política de Privacidade</b>
            <ol>
                <li>
                    <b>INTRODUÇÃO</b> Esta Política de Privacidade e Proteção de Dados Pessoais descreve, de maneira clara e acessível, como a HackerSec coleta, utiliza e protege os dados pessoais dos usuários e visitantes do nosso website institucional.
                </li><br>
            </ol>
            A HackerSec tem como compromisso a excelência em proteção cibernética, fornecendo recursos avançados para assegurar as empresas contra as ameaças digitais mais sofisticadas. <br> <br>

            Valorizamos sua privacidade e nos comprometemos a respeitar as leis de proteção de dados pessoais vigentes tanto nacional quanto internacionalmente, assegurando transparência e controle sobre o tratamento dos seus dados.

            <ol start="2">
                <li>
                    <b>NOSSAS RESPONSABILIDADES</b> Como “controladora” dos seus dados pessoais, a HackerSec define os propósitos e meios de tratamento dos seus dados. É nossa responsabilidade informar seus direitos e fornecer meios fáceis para exercê-los.
                </li><br>
            </ol>
            <b>Encarregado de Proteção de Dados (DPO)</b> Você pode contatar nosso DPO para esclarecer dúvidas ou exercer seus direitos através do e-mail: <l style="color:#2b93fe">contato@hackersec.com</l>

            <ol start="3">
                <li>
                    <b>COLETA DE DADOS PESSOAIS</b> Coletamos dados pessoais nas seguintes situações:
                </li>
            </ol>
            <ul>
                <li>
                    <b>Ao navegar no nosso site</b>: Coletamos seu IP, informações do dispositivo, data e hora de acesso.
                </li>
                <li>
                    <b>Interagindo conosco</b>: Através de formulários de cadastro ou contatos diretos por e-mail, telefone ou redes sociais.
                </li>
                <li>
                    <b>Durante cadastros</b>: Informações como nome, cargo, empresa, telefone e e-mail são coletadas para participação em eventos ou serviços
                </li>
            </ul>


            <ol start="4">
                <li>
                    <b>USO DOS SEUS DADOS PESSOAIS</b> Usamos seus dados pessoais para:





                </li>
            </ol>
            <ul>
                <li>
                    Cumprir obrigações legais e regulatórias;
                </li>
                <li>Executar contratos;</li>
                <li>Atender solicitações;</li>
                <li>Proteger direitos vitais;</li>
                <li>Responder a interesses legítimos, como segurança das nossas redes e sistemas, gerenciamento de negócios, e promoção de atividades.</li>
            </ul>


            <ol start="5">
                <li>
                    <b>SEUS DIREITOS E ESCOLHAS</b> Você tem direito de:
                </li>
            </ol>

            <ul>
                <li>Acessar seus dados pessoais;
                </li>
                <li>Corrigir dados imprecisos;
                </li>
                <li>Opor-se a certos tratamentos de dados;
                </li>
                <li>Solicitar a exclusão de seus dados;
                </li>
                <li>Pedir a portabilidade de seus dados;
                </li>
                <li>Revogar consentimentos dados.
                </li>
            </ul>

            <ol start="6">
                <li> <b>SEGURANÇA DOS SEUS DADOS</b> Implementamos medidas técnicas e organizacionais para proteger seus dados de acessos não autorizados e de tratamentos inadequados, visando manter a integridade e confidencialidade dos dados pessoais.
                </li>
                <li> <b>ARMAZENAMENTO E RETENÇÃO DE DADOS</b> Seus dados são armazenados em servidores seguros e são retidos apenas pelo período necessário para cumprir as finalidades pelas quais foram coletados, respeitando as obrigações legais.
                </li>
                <li> <b>COMPARTILHAMENTO DE DADOS</b> Compartilhamos dados pessoais somente quando necessário, sob bases legais definidas, com fornecedores e parceiros que nos ajudam nas operações.
                </li>
                <li> <b>COOKIES</b> Utilizamos cookies para melhorar sua experiência de navegação, analisar o uso do nosso site e para fins de marketing, respeitando suas escolhas de privacidade.
                </li>
                <li> <b>CONTATO E DPO</b> Em caso de dúvidas sobre esta política ou sobre o tratamento dos seus dados, entre em contato conosco via e-mail: <l style="color:#2b93fe">contato@hackersec.com</l>.
                </li>
            </ol>


            </p>
        </div>


    </div>
    <?php include("../rodape.php"); ?>



    </div>

    <script>
        function toggleMenu() {
            var navegacao = document.getElementById("navegacao");
            navegacao.classList.toggle("active");
            var menuToggle = document.querySelector(".menu-toggle");
            menuToggle.classList.toggle("change");

            var overlay = document.getElementById("overlay");
            overlay.style.display = "block";
        }

        function closeMenu() {
            var navegacao = document.getElementById("navegacao");
            navegacao.classList.remove("active");
            var menuToggle = document.querySelector(".menu-toggle");
            menuToggle.classList.remove("change");

            var overlay = document.getElementById("overlay");
            overlay.style.display = "none";
        }

        window.addEventListener('scroll', function() {
            var nav = document.getElementById('nav-fixed');
            var logo = document.getElementById('menu-image-center');
            if (window.scrollY > 0) {
                nav.style.transition = 'background-color 0.7s ease'; // Adiciona a transição suave
                nav.style.backgroundColor = 'black'; // Altera a cor de fundo desejada
                nav.classList.remove('transparent');
            } else {
                nav.style.transition = 'background-color 0.7s ease'; // Adiciona a transição suave
                nav.style.backgroundColor = 'transparent'; // Volta à cor de fundo transparente
                nav.classList.add('transparent');
            }
        });

        document.getElementById('menu-opcoes-right').addEventListener('mouseover', function() {
            document.getElementById('dropdown').style.display = 'block';
        });

        document.getElementById('dropdown').addEventListener('mouseleave', function() {
            document.getElementById('dropdown').style.display = 'none';
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Aguarde até que o conteúdo da página esteja totalmente carregado
            setTimeout(function() {
                // Esconda o preloader após um determinado tempo (1 segundo no exemplo)
                document.getElementById("preloader").style.display = "none";
                document.getElementById("content").style.display = "block"; // Mostra o conteúdo da página
            }, 1000); // Tempo em milissegundos
        });
    </script>

</body>

</html>