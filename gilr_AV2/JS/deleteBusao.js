/******* EDITAR ONIBUS *******/
function preencheCampos(pobjReturnJSON) {
    let campo = document.getElementById("id");
    let textnode = document.createTextNode(pobjReturnJSON.ID);
    let elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    campo = document.getElementById("marca");
    textnode = document.createTextNode(pobjReturnJSON.MARCA);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    campo = document.getElementById("modelo");
    textnode = document.createTextNode(pobjReturnJSON.MODELO);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    let rdbAssentos = document.getElementsByName("assentos");
    textnode = document.createTextNode(pobjReturnJSON.ASSENTOS);
    elemento = textnode.textContent;
    for (let i = 0; i < rdbAssentos.length; i++) {
        if (rdbAssentos[i].value == elemento) {
            rdbAssentos[i].checked = true;
        }
    }

    let rdbBanheiro = document.getElementsByName("banheiro");
    textnode = document.createTextNode(pobjReturnJSON.BANHEIRO);
    elemento = textnode.textContent;
    for (let i = 0; i < rdbBanheiro.length; i++) {
        if (rdbBanheiro[i].value == elemento) {
            rdbBanheiro[i].checked = true;
        }
    }

    let rdbArCondicionado = document.getElementsByName("ar_condicionado");
    textnode = document.createTextNode(pobjReturnJSON.AR_CONDICIONADO);
    elemento = textnode.textContent;
    for (let i = 0; i < rdbArCondicionado.length; i++) {
        if (rdbArCondicionado[i].value == elemento) {
            rdbArCondicionado[i].checked = true;
        }
    }

    campo = document.getElementById("placa");
    textnode = document.createTextNode(pobjReturnJSON.PLACA);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    campo = document.getElementById("chassi");
    textnode = document.createTextNode(pobjReturnJSON.CHASSI);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento);
}
/******* LISTAR ONIBUS *******/
function listaOnibus() {
    var query = location.search.slice(1);
    var partes = query.split('&');
    var data = {};
    let str = "";
    let first = true;
    partes.forEach(function (parte) {
        var chaveValor = parte.split('=');
        var chave = chaveValor[0];
        var valor = chaveValor[1];
        data[chave] = valor;
    });

    for (var chave in data) {
        if (first) {
            str = "?";
            str = str + chave + "=" + data[chave];
            firts = false;
        } else {
            str = str + "&" + chave + "=" + data[chave];
        }
    }
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            for (i = 0; i < obj.length; i++) {
                let linha = obj[i];
                preencheCampos(linha);
            }
        }
    }

    xmlHttp.open("GET", "http://localhost:8000/selecionar_onibus.php" + str);
    xmlHttp.send();
}

function excluirOnibus() {
    let strId = document.getElementById("id").value;
    
    EnviarForm(strId);
}

function EnviarForm(pId) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "sucesso") {
                alert("Excluído com sucesso");
                window.location.replace("http://localhost:8000/viacaocalango.html");
            }
        }
    }
    let str = "?id=" + pId;

    xmlHttp.open("GET", "http://localhost:8000/excluir_onibus.php" + str);
    xmlHttp.send();
}