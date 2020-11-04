<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "supereletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nomeCliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valorInicial']) && isset($_POST['quantidade']) && isset($_POST['valorTotal'])){


$nome_cliente = $_POST['nomeCliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$nome_produto = $_POST['produto'];
$valor_unitario = $_POST['valorInicial'];
$quantidade = $_POST['quantidade'];
$valor_total = $_POST['valorTotal'];

$sql = "insert into pedidos (nome_cliente, endereco, telefone, nome_produto, valor_unitario, quantidade, valor_total) values ('$nome_cliente','$endereco','$telefone','$nome_produto','$valor_unitario', '$quantidade', '$valor_total')";
$result = $conn->query($sql);
}

?> 


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <meta charset="UTF-8">
        <title>Pedidos - Super Eletro</title>

    </head>

    
    <body class="contatos">
        <!--Menu-->
        <table width="100%" class="links">
            <tr>
                <td align="center" width="20%"><a href="index.php">
                <img width="70px" src="./Imagens/super_eletro.jpg" alt="logo da loja Super Eletro"></a></td>
                <td align="center" width="20%"><a href="produtos.php">Produtos</a></td>
                <td align="center" width="20%"><a href="pedidos.php">Pedidos</a></td>
                <td align="center" width="20%"><a href="lojas.php">Nossas lojas</a></td>
                <td align="center" width="20%"><a href="contato.php">Fale com a gente!</a></td>
            </tr>
        </table>
        <!--Fim do menu-->



<!--Campo para o cliente fazer o pedido-->

    <main>

<form method = 'POST' name = 'pedidos' action = "" >

    <h1 id="tituloPedido">Quero fazer um pedido :)</h1>
        <div class="inputPedido">
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Meu nome:</h4>
        <input type="text" name= "nomeCliente" placeholder="digite seu nome" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Endereço:</h4>
        <input type="text" name= "endereco" placeholder="digite seu endereço" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Telefone:</h4>
        <input type="text" name= "telefone" placeholder="Digite seu telefone" class=" inputform"> <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Produto:</h4>
        <input type="text" name= "produto" placeholder="digite seu produto" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> R$ Inicial:</h4>
        <input type="text" name= "valorInicial" placeholder="digite o valor" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Quantidade:</h4>
        <input type="text" name="quantidade" placeholder="digite a quantidade" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterar]]cor(this)">R$ Total:</h4>
        <input type="text" name="valorTotal" number="numero" placeholder="digite valor total" class="inputform" > <br><br>
       
        <input type="submit" name="submit" value="ENVIAR!" class=" inputEnviar">

</div>
</form>

  </main> 

        <!--Fim do formulário-->



        <br><br><br><br><br>




        <!--Formas de pagamento-->
    <center>  
    <span>
        <h4 id="formas_pagamento">Formas de pagamento</h4>
        <img src="./Imagens/download.jpg" alt="Formas de pagamento">
    </span>
    </center> 
        <!--Fim de Formas de pagamento-->

        

    <center font face="Arial" size="2">
    &copy;2020 Super Eletro
    </center>

    
    </body>

    </html>
