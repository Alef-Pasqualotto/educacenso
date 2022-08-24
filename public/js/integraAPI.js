let selectEstado = document.getElementById("uf");
let selectCidade = document.getElementById("cidade");
let cidade_id = document.getElementById("cidade_id");
let uf_id = document.getElementById("uf_id");

// Função para ordenar alfabeticamente as options
function compare(el1, el2, index) {
    return el1[index] == el2[index] ? 0 : el1[index] < el2[index] ? -1 : 1;
}

// Função de consulta à API de estados
function pegaJSONestados(path, success, error) {
    // Com uma nova instância de XMLHttpRequest é possível abri-la com uma url e mandar para algum lugar dependendo do status de conexão
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

// Função de consulta à API de cidades
function pegaJSONcidades(path, success, url, error) {
    // Com uma nova instância de XMLHttpRequest é possível abri-la com uma url e mandar para algum lugar dependendo do status de conexão    
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
    // Após conseguir os dados, eles são organizados alfabeticamente e transformados em options
    data.sort(function (el1, el2) {
        return compare(el1, el2, "nome");
    });
    for (let i = 0; i < data.length; i++) {
        option = document.createElement("option");
        option.setAttribute("value", data[i]["sigla"]);
        option.setAttribute("estado_id", data[i]["id"]);
        option.innerHTML = data[i]["nome"];
        selectEstado.appendChild(option);
    }
    // Setar o valor do input uf hidden
    uf_id.setAttribute("value", selectEstado.options[selectEstado.selectedIndex].getAttribute('estado_id'));
    buscaCidades();
});

selectEstado.addEventListener("focusout", async function () {buscaCidades()});
    // Setar o valor do input cidade hidden
selectCidade.addEventListener("focusout", async function () {    
    cidade_id.setAttribute("value", selectCidade.options[selectCidade.selectedIndex].getAttribute('cidade_id'));    
})


async function teste() {
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
            // Após conseguir os dados, eles são organizados alfabeticamente e transformados em options
            data.sort(function (el1, el2) {
                return compare(el1, el2, "nome");
            });
            for (let i = 0; i < data.length; i++) {
                option = document.createElement("option");
                option.setAttribute("value", data[i]["nome"]);
                option.setAttribute("class", "cidades");
                option.setAttribute("cidade_id", data[i]["id"]);
                option.innerHTML = data[i]["nome"];
                selectCidade.appendChild(option);
            }
        },
        url
    );

    // Setar o valor do input uf hidden
    uf_id.setAttribute("value", selectEstado.options[selectEstado.selectedIndex].getAttribute('estado_id'));
};



    async function buscaCidades(){
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
            // Após conseguir os dados, eles são organizados alfabeticamente e transformados em options
            data.sort(function (el1, el2) {
                return compare(el1, el2, "nome");
            });
            for (let i = 0; i < data.length; i++) {
                option = document.createElement("option");
                option.setAttribute("value", data[i]["nome"]);
                option.setAttribute("class", "cidades");
                option.setAttribute("cidade_id", data[i]["id"]);
                option.innerHTML = data[i]["nome"];
                selectCidade.appendChild(option);
            }
        },
        url
    );

    // Setar o valor do input uf hidden
    uf_id.setAttribute("value", selectEstado.options[selectEstado.selectedIndex].getAttribute('estado_id'));
};