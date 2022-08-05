let select = document.getElementById("uf");

function compare(el1, el2, index) {
    return el1[index] == el2[index] ? 0 : (el1[index] < el2[index] ? -1 : 1);
  }

function pegaJSON(path, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (success) success(JSON.parse(xhr.responseText));
            } else {
                if (error) error(xhr);
            }
        }
    };
    xhr.open(
        "GET",
        "https://servicodados.ibge.gov.br/api/v1/localidades/estados",
        true
    );
    xhr.send();
}

pegaJSON("estados.json", function (data) {
    data.sort(function(el1,el2){
    return compare(el1, el2, "nome")
  });
    for (let i = 0; i < data.length; i++) {
        option = document.createElement('option');        
        option.setAttribute('value', data[i]['id']);
        option.innerHTML = data[i]['nome'];
        select.appendChild(option);
    }
});