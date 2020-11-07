<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['CLIENTE']) && isset($_POST['TELEFONE']) && isset($_POST['PRODUTO']) && isset($_POST[' VALOR_UNITARIO']) && isset($_POST['QUANTIDADE']) && isset($_POST[' VALOR_TOTAL'])){

$nome_cliente = $_POST[ 'CLIENTE' ];
$telefone = $_POST[ 'TELEFONE' ];
$nome_produto = $_POST[ 'PRODUTO' ];
$valor_unitario = $_POST[ 'VALOR_UNITARIO' ];
$quantidade = $_POST[ 'QUANTIDADE' ];
$valor_total = $_POST[ ' VALOR_TOTAL' ];

    
$sql = "insert into pedidos (CLIENTE,TELEFONE, PRODUTO,  VALOR_UNITARIO, QUANTIDADE, VALOR_TOTAL) values ('$nome_cliente','$telefone','$nome_produto','$valor_unitario', '$quantidade','$valor_total')";
    
$result = $conn -> query($sql);
    
}


?> 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <link rel="stylesheet" href="./estilo.css">
        <meta charset="UTF-8">
        <title>Pedidos</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
<body>     

 <?php
    include('menu.html');
    ?>

<main>

<form method = 'POST' name = 'pedidos' action = ""  class="form">

    <h1 id="tituloPedido"> Pedidos: </h1> <br/> <br/>
    
<div class="container">
     <div class="form-group-sm">
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> 
        
        Nome:</h4>
        <input type="text" name= "CLIENTE" class="form-control"  placeholder="digite seu nome"  class="nome" > <br>
        
        <h4 > Telefone:</h4>
        <input type="number" name= "TELEFONE" placeholder="Digite seu telefone" class="form-control"  class="nome" > <br>
        
        <h4> Produto:</h4>
        <input type="text" name= "PRODUTO" placeholder="descrição do  produto"    class="form-control"  class="nome"> <br>
        
        <h4 > ValorUnitário</h4>
        <input type="number" name= " VALOR_UNITARIO" placeholder="valor..."class="form-control"  class="nome" > <br>
       
        <h4 >Quantidade:</h4>
        <input type="number" name="QUANTIDADE" placeholder="quantidade"   class="form-control" class="nome"  > <br>
       
        <h4 >Total:</h4>
        <input type="number" name="VALOR_TOTAL" number="numero" placeholder="digite valor total" class="form-control" class="nome"  > <br><br>
       
        <buton type="submit" class=" btn btn-success">ENVIAR</buton>

</div>
</div>
</form>
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  </main> 

        <!--Fim do formulário-->



        <br><br><br><br><br>




        <footer>
        <div>
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="img" src="./img/Car.png" alt="Formas de pagemento" width="300" />
            <p id="copy">&copy; Recode Pro</p>
        </div>
    </footer>
    
    </body>

    </html>