document.addEventListener('click', (e) =>{

    let elementId = e.target.id;

    if (elementId == 'sim') {
        document.getElementById("form_valor_diferenca").style.display = "block"
    }

    if (elementId == 'nao') {
        document.getElementById("form_valor_diferenca").style.display = "none"
    }
  }
); 