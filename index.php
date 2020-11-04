<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <meta charset="UTF - 8">
        <title>Super Eletro</title>

        <script src="./JS/superEletro.js" ></script>
        
        <script>

            let nome = prompt("Qual o seu nome?");
         
            alert(nome + ", seja bem-vindo(a) à nossa loja!");
         
         </script>

    </head>

    <body>
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

        <!--Texto informativo / de apresentação-->

        <div id="buttonInicial">

            <button onclick = "tituloInicial()">Seja-bem vindo!</button>
        </div>
        <p id="texto_cliente" align="center">

        <!--Fim do Texto informativo / de apresentação-->

        <!--Logo-->
        <center>
        <img width="25%" src="./Imagens/super_eletro.jpg" alt="logo do Super Eletro">
        </center>  
        <!--Logo-->  
        
        <!--Formas de pagamento-->        
    <center>  
    <span>
        <h4 id="formas_pagamento">Formas de pagamento</h4>
        <img src="./Imagens/download.jpg" alt="Formas de pagamento">
    </span>
    </center> 
    <!--Fim de formas de pagamento-->   

    <center font face="Arial" size="2">
    &copy;2020 Super Eletro
    </center>

    </body>
</html>