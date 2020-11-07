<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas - Full Stack Eletro</title>
    <link rel="icon" href="./img/Logo.png" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./estilo.css">
    
</head>

<body>
    <!-- Menu  -->
   <?php
    include('menu.html');
    ?>
    <!--Fim do menu  -->

    <header>
        <br/><br/>
        <h2 class="mag">Nossas lojas</h2>
        <hr>
    </header>

    <section class="unid">
        <div class="grupoLoja" class="container">
            <h3> Rio de Janerio</h3>
            <ul>
                <li>Avenida Presidente Vargas, 5000</li>
                <li>10 &ordm; andar</li>
                <li>Centro</li>
                <li>(21) 3333-3333</li>
            </ul>
        </div>
        <div class="grupoLoja">
            <h3> São Paulo</h3>
            <ul>
                <li>Avenida Casa Grande,900></li>
                <li>3 &ordm; andar</li>
                <li>Diadema</li>
                <li>(11)4469-4456</li>
            </ul>
        </div>
        <div class="grupoLoja">
            <h3> São Paulo</h3>
            <ul>
                <li>Rua Major &Aacute;vila, 370</li>
                <li>3 &ordm; andar</li>
                <li>Vila Mariana</li>
                <li>(99)95865-9955</li>
            </ul>
        </div>
    </section>
    
    <br/> <br/>

    <footer>
        
        <div>
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="img" src="./img/Car.png" alt="Formas de pagemento" width="300" />
            <p id="copy">&copy; Recode Pro</p>
        </div>
    </footer>



</body>



</html>