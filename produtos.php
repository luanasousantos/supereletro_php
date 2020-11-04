<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <meta charset="UTF-8">
        <title>Produtos - Super Eletro</title>

        <script src="./JS/superEletro.js" ></script>


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
        
            <!--Lista de produtos-->
          
        <h2>Produtos</h2>
        <hr>
        <table border="0" width="100%" cellppading="" class = "produtos">
            <tr>
             <td rowspan="5" width="20%" valign="top">
                 <h3><b>Do que você precisa?</b></h3>
                <ul id="lista_produtos">
                    <li onclick="exibir_todos()"><font>Todos os produtos (9)</font></li>
                    <li onclick="exibir_categoria('cafeteira')"><font>Cafeteiras (2)</font></li>
                    <li onclick="exibir_categoria('fogao')"><font>Fogões (2)</font></li>
                    <li onclick="exibir_categoria('geladeira')"><font>Geladeiras (3)</font></li>
                    <li onclick="exibir_categoria('lava_louca')"><font>Lava-louças (1)</font></li>
                    <li onclick="exibir_categoria('micro_ondas')"><font>Micro-ondas (1)</font></li>
                </ul>
            </td>
            <!--Fim da lista de produtos-->

            <!--Produtos-->
            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="cafeteira" style="display: block;">
                <img src="./Imagens/cafeteira expresso Dolce gusto.jpg" alt="cafeteira expresso Dolce Gusto" width="120px" onclick="destaque(this)">
                <br>Cafeteira Expresso Dolce Gusto Nescafé Arno 
                <hr> De <strike>R$ 435,00</strike><br>
                <font size="4" color="red">Por apenas R$ 399,00</font> <br>   
            </td>

            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="cafeteira" style="display:block;">
                    <img src="./Imagens/Cafeteira expresso primalatte.jpg" alt="cafeteira expresso Oster Primalatte" width="120px" onclick="destaque(this)">
                    <br>Cafeteira Expresso Oster Primalatte cinza e preto
                    <hr>De <strike>R$ 350,00</strike><br>
                    <font size="4" color="red">Por apenas R$ 280,00</font> <br>   
            </td>

            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="fogao" style="display:block;">
                <img src="./Imagens/fogao Consul 4 bocas.jpg" alt="fogão Consul branco 4 bocas" width="120px" onclick="destaque(this)">
                <br>Fogão 4 bocas Consul branco
                <hr>De <strike>R$ 500,00</strike>><br>
                <font size="4" color="red">Por apenas R$ 450,00</font> <br>   
            </td>
        </tr>

        <tr>
            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="fogao" style="display:block;" >
                <img src="./Imagens/fogão atlas 5 bocas.jpg" alt="fogão Atlas 5 bocas" width="138px" onclick="destaque(this)">
                <br>Fogão Atlas 5 bocas Tropical Glass
                <hr>>De <strike>R$ 1510,00</strike><br>
                <font size= "4" color="red">Por apenas R$ 1129,00</font><br>   
            </td>

            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="geladeira" style="display:block;">
                <img src="./Imagens/geladeira e refrigerador Electrolux Frost Free Inox.jpg" alt="Geladeira e refrigerador Electrolux" width="184px" onclick="destaque(this)">
                <br>Geladeira e refrigerador Electrolux Frost Free Inox
                <hr>De <strike>R$ 3092,00</strike><br>
                <font size="4" color="red">Por apenas R$ 2083,00</font> <br>   
            </td>

            <td width="20%" align="center" valign="botton" class="produtos_imagens" id= "geladeira" style="display:block;">
                    <img src="./Imagens/Geladeira Panasonic Frost Free.jpg" alt="Geladeira Panasonic Frost Free" width="138px" onclick="destaque(this)">
                    <br>Geladeira e refrigerador Panasonic Frost Free
                    <hr>De <strike>R$ 2295,00</strike><br>
                    <font size="4" color="red">Por apenas R$ 2120,00</font> <br>   
            </td>
            </tr>

            <tr>
            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="geladeira" style="display:block;">
                    <img src="./Imagens/Geladeira Frost free Facilite Consul.jpg" alt="Geladeira Frost free Facilite Consul" width="150px" onclick="destaque(this)">
                    <br>Geladeira Frost Free Facilite Consul
                    <hr>De <strike>R$ 3241,00</strike><br>
                    <font size="4" color="red">Por apenas R$ 3100,00</font> <br>   
            </td>

            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="lava_louca" style="display:block;">
                    <img src="./Imagens/Lava-loucas brastemp ative.jpg" alt="Lava-louças Brastemp Ative!" width="200px" onclick="destaque(this)">
                    <br>Lava-louças Brastemp Ative! 
                    <hr>De <strike>R$ 1253,00</strike><br>
                    <font size="4" color="red">Por apenas R$ 1124,00</font> <br>   
            </td>
            <td width="20%" align="center" valign="botton" class="produtos_imagens" id="micro_ondas" style="display: block;">
                <img src="./Imagens/forno-de-micro-ondas-consul-cm020bf-com-menu-uso-facil-20-l-2436571.jpg" alt="Forno de Micro-ondas com menu fácil Consul" width="150px" onclick="destaque(this)">
                <br>Forno de Micro-ondas com menu fácil Consul
                <hr>De <strike>R$ 500,00</strike><br>
                <font size="4" color="red">Por apenas R$ 460,00</font> <br>   
            </td>
            </tr>
            </table>
        <!--Fim dos produtos-->

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