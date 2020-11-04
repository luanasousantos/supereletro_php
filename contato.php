
<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "supereletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nome']) && isset($_POST['mensagem'])){


$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];


$sql = "insert into contato (nome, mensagem) values ('$nome','$mensagem')";
$result = $conn->query($sql);

}

?> 

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <meta charset="UTF-8">
        <title>Contatos - Super Eletro</title>

        <script src="./JS/superEletro.js" ></script>  
              
        <script>

            let opcao = confirm("Deseja falar com a gente?");
        
            alert("Para elogios e sugestões, use os canais abaixo!");
        
        </script>
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
        
        <!--Contatos-->
        <h2>Contatos</h2>
        <hr>
        <table border="0" width="100%" cellpadding="20">
            <tr>
                <td width="33%"align="center">
                    <img src="Imagens/telefone.png" alt="Ícone do telefone" width="40px">
                    <font face="Arial" size="4">SAC (11) 4445-3343</font>
                </td>

                <td width="33%" align="center">
                    <img src="Imagens/whatsapp.png" alt="Ícone do whatsapp" width="40px">
                    <font face="Arial" size="4">(11) 98834-2298</font>
                </td>

                <td width="33%" align="center">
                    <img src="Imagens/email.png" alt="Ícone do Email" width="40px">
                    <font face="Arial" size="4">contato@supereletro.com</font>
                </td>
            </tr>
        </table>
        <!--Fim dos contatos-->

        <!--Campo para o cliente escrever-->
        <form method = 'POST' name = 'contato' action = "" >
            <h4>Nome:</h4>
            <input type="text"name="nome" style="width: 400px">
            <h4>Mensagem</h4>
            <textarea  name= "mensagem" style="width: 400px"></textarea>
            <input type="submit" value="Enviar">
        </form>
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