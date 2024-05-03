<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contacto/contato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./Assets/img/favicon_io/favicon.ico" type="image/x-icon">
    <title>HackerSec - Cibersegurança Avançada</title>
    <link rel="stylesheet" href="./global.css">
    <style>
        #container {
            position: relative;
            background-image: url(./Assets/img/home-hackersec-banner-22.png);
            background-size: cover;
            width: 100%;
            height: 100vh;
            /* Ajuste conforme necessário */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.75); /* Cor do overlay escuro */
    z-index: -1; /* Coloca o overlay atrás do conteúdo */
}

#container .content-overlay {
    position: relative;
    z-index: 1; /* Coloca o conteúdo sobre o overlay */
    text-align: center;
    color: white;
}

        .content-overlay h1 {
            font-size: 32px;
        }

        .content-overlay p {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content-overlay p#ajuda{
            font-size: 17px;
        }
        .content-overlay h1{
            font-size: 45px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 3rem;
        }

        .button {
            display: inline-block;
            padding: 46px 140px;
            background-color: transparent;
            border: 2px solid #75787b;
            /* Cor do botão */
            color: white;
            /* Cor do texto do botão */
            text-decoration: none;
            font-size: large;
            margin-right: 10px;
        }
        
    </style>
</head>

<body>
<?php include("./pre-loader.php");?>

    <div id="container">
        <div id="img-topo">

        </div>


       <?php include ("./cabecalho.php")?>


        </div>

        <div id="overlay" onclick="closeMenu()"></div>


        <div class="content-overlay">
      
            <!-- Seu conteúdo aqui -->
            <p style="font-size: 40px;">ELEVANDO A CIBERSEGURANÇA<br>DE EMPRESAS E PESSOAS</p>
            <p id="ajuda">COMO PODEMOS AJUDAR?</p>
            <div class="buttons">
                <a href="https://hackersec.com/empresas/" class="button">CIBERSEGURANÇA PARA EMPRESAS</a>

                <a href="https://hackersec.com/academy/" class="button">TREINAMENTOS DE CIBERSEGURANÇA</a>
            </div>
        </div>



    </div>
    <?php include("./rodape.php"); ?>



    </div>

 <script src="/script/script.js"></script>
</body>

</html>