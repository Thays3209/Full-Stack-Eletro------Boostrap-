
<?php
$servername = "localhost";
$username="root";
$passaword="";
$database="fseletro";

$conn=mysqli_connect($servername,$username,$passaword,$database);  
if(!$conn){
  die("A conexão falou".msqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="icon" href="./img/Logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
    <script src="./funcao.js"> </script>
</head>

<body>
<!--menu-->

    <?php
    include('menu.html');
    ?>

<!--começo do corpo do texto-->

     <br><br>
    <h2 class="h2">Produtos:</h2>
    <hr>

    <section>
        <h3 class="categoria"> Categorias: </h3>
        <ul class="categoria">
            <li onclick="exibir_todos()">Todos(12)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')">Fogões(2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavadouraDeRoupa')">Lavadouras de roupa (2)</li>
            <li onclick="exibir_categoria('lavaLouca')">Lava-louças (2)</li> <br><br>
        </ul>
        
        
    </section>

    <aside id="prod" class= "container">
        
        
        <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);
    
        if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
    
        
            
        ?>  
            
             <div class="produtos" id="<?php echo $row["categoria"]?>" style="display:block;">
                    <img src="<?php echo $row["imagem"]?>" alt="Fogão Consul Ínox" width="170px" height="240px" onclick="destaque(this)">
                    <h4><?php echo $row["descrição"]?></h4>
                    <hr>
                    <p class="valorAntes"><?php echo $row["precoAntes"]?></p>
                    <p class="valorDesc"><?php echo $row["precoDepois"]?></p>
            </div>   
        <?php  
            
        }
        }else{
        echo"Nunhum produto cadastrado";
        }
                
        ?>
            
          
    </aside>

    <!--Fim do corpo do texto-->


    <footer>
        <div>
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="img" src="./img/Car.png" alt="Formas de pagemento" width="300" />
            <p id="copy">&copy; Recode Pro</p>
        </div>
    </footer>


</body>


</html>