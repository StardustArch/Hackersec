<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contato.css">
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/Assets/img/favicon_io/favicon.ico" type="image/x-icon">
    <title>Contato - HackerSec</title>
    <style> 
        #img-topo {
    background: rgba(0, 0, 0, 0.689);
    height: 365px;
    margin-left: -20px;
    background-image: url('/Assets/img/fundo-sobre-hackersec-min.png');
    background-size: 100% auto;
    background-position: center;
    background-repeat: no-repeat;
}
select{
    width: 100px;
}

    </style>
</head>

<body> 

<?php include("../pre-loader.php");?>
    <div id="container">
        <div id="img-topo"">

        </div>

       <?php include("../cabecalho.php");?>

            <div id="logo-principal" style="margin-left: 10px;">
            <h2 sty>Entre em contato</h2>
            </div>
        </div>

        <div id="overlay" onclick="closeMenu()"></div>

        <div id="hackersec-info">
            <form id="contact-form">
                <label for="full-name">Nome Completo:</label><br>
                <input type="text" id="full-name" name="full-name" required><br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="whatsapp">WhatsApp/telefone:</label><br>
                <input type="tel" id="whatsapp" name="whatsapp" placeholder="82 123 4567" required><br>

                <label for="subject">Selecione o Assunto:</label><br>
                <select id="subject" name="subject" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Serviços para Empresa">Serviços para Empresa</option>
                    <option value="Treinamentos/Cursos">Treinamentos/Cursos</option>
                    <option value="Parcerias">Parcerias</option>
                    <option value="Eventos">Eventos</option>
                    <option value="Imprensa">Imprensa</option>
                </select><br>

                <label for="description">Descreva mais o que precisa:</label><br>
                <textarea id="description" name="description" rows="8" required></textarea><br>

                <div id="button">
                    <a href="">Enviar</a>
                </div>
            </form>



            <div id="conteudo">
                <h3 id="titulo">NOSSOS ESCRITÓRIOS</h3>
                <div>
                    <div id="brazil">
                        <p>São Paulo, Brasil</p>
                        <div id="titulo1">


                            <div class="mapa-brazil">
                                <img src="/Assets/img/thumbnail.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="boston">
                        <p>Boston, Estados Unidos</p>
                        <div id="titulo2">


                            <div id="mapa-boston">
                                <img src="/Assets/img/thumbnail (1).jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <?php include("../rodape.php") ?>



    </div>
<script src="/script/script.js"></script>
</body>

</html>