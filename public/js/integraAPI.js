let selectEstado = document.getElementById("uf");
let selectCidade = document.getElementById("cidade");
let cidade_id = document.getElementById("cidade_id");

function compare(el1, el2, index) {
    return el1[index] == el2[index] ? 0 : el1[index] < el2[index] ? -1 : 1;
}

function pegaJSONestados(path, success, error) {
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

function pegaJSONcidades(path, success, url, error) {
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
    xhr.open("GET", url, true);
    xhr.send();
}

pegaJSONestados("estados.json", function (data) {
    data.sort(function (el1, el2) {
        return compare(el1, el2, "nome");
    });
    for (let i = 0; i < data.length; i++) {
        option = document.createElement("option");
        option.setAttribute("value", data[i]["id"]);
        option.innerHTML = data[i]["nome"];
        selectEstado.appendChild(option);
    }
});

selectEstado.addEventListener("focusout", async function () {
    let url =
        "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/municipios".replace(
            "{UF}",
            selectEstado.value
        );
    cidades = document.getElementsByClassName("cidades");

    if (cidades != null) {
        for (let i = cidades.length - 1; i >= 0; i--) {
            await cidades[i].remove();
        }
    }

    await pegaJSONcidades(
        "cidades.json",
        function (data) {
            data.sort(function (el1, el2) {
                return compare(el1, el2, "nome");
            });
            for (let i = 0; i < data.length; i++) {
                option = document.createElement("option");
                option.setAttribute("value", data[i]["id"]);
                option.setAttribute("class", "cidades");
                option.innerHTML = data[i]["nome"];
                selectCidade.appendChild(option);
            }
        },
        url
    );
});

cidade_id.addEventListener("focusout", async function () {});