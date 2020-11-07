

function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName('produtos');
    console.log(elementos);
    for ( var i=0 ; i<elementos.length ; i++) {
    console.log(elementos[i].id);
      if (categoria == elementos[i].id)
          elementos[i].style="display:block";
      else
          elementos[i].style="display:none";
    }  
}

let exibir_todos = () => {

        let elementos = document.getElementsByClassName('produtos');
       
        for ( var i=0 ; i<elementos.length ; i++) {
              elementos[i].style="display:block";
        } 
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 300)
          imagem.width = 130;
    else
        imagem.width=300;
};

