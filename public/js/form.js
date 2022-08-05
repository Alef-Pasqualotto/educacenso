document.getElementById('#sim, #nao').addEventListener('click', (e) =>{

    let elementId = e.target.id;

    if (elementId == 'sim') {
        document.getElementById("form_valor_diferenca").style.display = "block"
    }

    else { 
        document.getElementById("form_valor_diferenca").style.display = "none"
    }
  }
); 