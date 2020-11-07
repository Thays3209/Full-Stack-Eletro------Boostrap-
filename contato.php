<?php
$servername = "localhost";
$username="root";
$passaword="";
$database="fseletro";

$conn=mysqli_connect($servername,$username,$passaword,$database);  
if(!$conn){
  die("A conexão falou".msqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['msg'])) {
       $nome = $_POST['nome'];
       $msg =  $_POST['msg'];

$sql = "insert into comentarios (nome,msg) values ('$nome','$msg') " ;
$result = $conn->query($sql);
   
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - Full Stack Eletro</title>
    <link rel="icon" href="./img/Logo.png" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>

<!-- Menu  -->
  
    <?php
    include_once('menu.html');
    ?>
   

    <br/><br/>
    
    <h2 class="contatos1">Contatos:</h2>
    <hr>



    <section class="contatos">
        <div class="email">
            <p class="cont" title="contato@fullstackeletro.com"> <a href="https://mail.google.com/" target="_blank"><img
                        class="logo_contato" src="./img/email.png" width="65px" height="100px"> </a> <br />
                contato@fullstackeletro.com</p>
        </div>
        <div class="tel">
            <p class="cont" title="click para prosseguir"> <a href="https://web.whatsapp.com/" target="_blank"><img
                        class="logo_contato2" src="./img/whats.png" width="65px" height="100px"></a> <br />
                (11) 99956-9963</p>
        </div>
    </section>



    <section class="form" class="container">
       <form action=""  method="post">
        <div class="container">
            <div class="form-group-sm">
                <label>Digite seu nome</label>
                <input type="nome"  class="form-control"  placeholder="seu nome"  name="nome" title="Digite seu nome">
               
            </div>
            <div class="form-group-sm">
                <label>Mensagem</label>
                <textarea type="text"  class="form-control" name= "msg" placeholder="digite sua mensagem" ></textarea>
            </div>
            <div class="form-group-sm">
                <input type="checkbox" id="check" class="form-check-input" title="selecione a caixa para confirmar">
                <label for="check" id="form-check-label">Amei o produto</label>
            </div>

            <buton type="submit" class=" btn btn-success" title="Enviar Mensagem">Enviar</buton>

        </div>
    </form> 
        
    </section>
    
    

    
    
  <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
    
        if($result->num_rows>0){
        while ($rows = $result->fetch_assoc()){
                 echo "Data: ", $rows['data'],"<br/>";
                 echo "Nome: ", $rows['nome'],"<br/>";
                 echo "Mensagem: ", $rows['msg'],"<br/>";
                 echo "<hr>";
        }
        }else{
        echo"Nunhum comentario cadastrado";
        }
                
    ?>
    
    

    <footer>
        <div>
            <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
            <img id="img" src="./img/Car.png" alt="Formas de pagemento" width="300" />
            <p id="copy">&copy; Recode Pro</p>
        </div>
    </footer>

</body>


</html>