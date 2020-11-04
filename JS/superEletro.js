
//Página inicial - evento  ONCLICK para texto informativo//

function tituloInicial(){

    document.getElementById("texto_cliente").innerHTML= "Aqui em nossa loja, é você quem manda!Confira os descontos imperdíveis e exclusivos! Até o Superman ficará com inveja dos nossos super preços";

}


//Produtos//

//Exibir categorias separadas//
function exibir_categoria(categoria) {
    
    let elementos = document.getElementsByClassName("produtos_imagens");
    console.log(elementos);

    for (var i=0; i < elementos.length; i++) {
        console.log(elementos[i].id);

        if (categoria == elementos[i].id)
        elementos[i].style = "display:inline";

        else
        (elementos[i].style = "display:none")
    }
}

//Exibir todos os produtos//

let exibir_todos = () => {
    let elementos = document.getElementsByClassName("produtos_imagens");

    for (var i=0; i < elementos.length; i++) {
        elementos[i].style= "display: block-inline";
    }
};

//Aumentar de tamanho determinado produto//

let destaque = (imagem) => {
    console.log(imagem);
    if (imagem.width==120)
    imagem.width= 240;
    else
    (imagem.width=120);
}
