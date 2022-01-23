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

function marcaValida(pMarca){
    if (pMarca == "" || pMarca.length <= 3 || pMarca.length > 20) {
        return false;
    }
    return true;
}

function modeloValido(pModelo){
    if (pModelo == "" || pModelo.length <= 3 || pModelo.length > 20) {
        return false;
    }
    return true;
}

function chassiValido(pChassi){
    if (pChassi.length != 17) {
        return false;
    }
    return true;
}

function placaValida(pPlaca){
    if (pPlaca.length != 7) {
        return false;
    }
    return true;
}

function validarForm() {
    let strId = "";
    let strMarca = "";
    let strModelo = "";
    let strChassi = "";
    let strPlaca = "";

    strMarca = document.getElementById("marca").value;
    strModelo = document.getElementById("modelo").value;
    let rdbAssentos = document.getElementsByName("assentos");
    let strAssentos = "";
    for (let i = 0; i < rdbAssentos.length; i++) {
        if (rdbAssentos[i].checked) {
            strAssentos = rdbAssentos[i].value;
        }
    }

    let rdbBanheiro = document.getElementsByName("banheiro");
    let strBanheiro = "";
    for (let i = 0; i < rdbBanheiro.length; i++) {
        if (rdbBanheiro[i].checked) {
            strBanheiro = rdbBanheiro[i].value;
        }
    }

    let rdbArCondicionado = document.getElementsByName("ar_condicionado");
    let strAr_condicionado = "";
    for (let i = 0; i < rdbArCondicionado.length; i++) {
        if (rdbArCondicionado[i].checked) {
            strAr_condicionado = rdbArCondicionado[i].value;
        }
    }

    strChassi = document.getElementById("chassi").value;
    strPlaca = document.getElementById("placa").value;
    strId = document.getElementById("id").value;
    let msgErro = "";

    if (!marcaValida(strMarca)) {
        msgErro = "Marca precisa ter entre 4 e 20 caracteres.";
        alert("Ops!!! Erro nos dados.\n\n" + msgErro);
    } else if (!modeloValido(strModelo)) {
        msgErro = "Modelo precisa ter entre 4 e 20 caracteres.";
        alert("Ops!!! Erro nos dados.\n\n" + msgErro);
    } else if (!chassiValido(strChassi)) {
        msgErro = "Chassi precisa ter 17 caracteres.";
        alert("Ops!!! Erro nos dados.\n\n" + msgErro);
    } else if (!placaValida(strPlaca)) {
        msgErro = "Placa precisa ter 7 caracteres.";
        alert("Ops!!! Erro nos dados.\n\n" + msgErro);
    }
    
    if (msgErro === "") {
        EnviarForm(strId,
                strMarca.toUpperCase(), 
                strModelo.toUpperCase(), 
                strAssentos, 
                strBanheiro, 
                strAr_condicionado, 
                strChassi.toUpperCase(), 
                strPlaca.toUpperCase());
    }

}

function EnviarForm(pId, pMarca, pModelo, pAssentos, pBanheiro, pAr_condicionado, pChassi, pPlaca) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log("Chegou resposta: " + this.responseText)
            if (this.responseText === "sucesso") {
                alert("Editado com sucesso");
            } else {
                alert(this.responseText);
            }
            
            window.location.replace("http://localhost:8000/viacaocalango.html");
        }
    }
    let str = "?id=" + pId +
        "&marca=" + pMarca +
        "&modelo=" + pModelo +
        "&assentos=" + pAssentos +
        "&banheiro=" + pBanheiro +
        "&ar_condicionado=" + pAr_condicionado +
        "&chassi=" + pChassi +
        "&placa=" + pPlaca;
    xmlHttp.open("GET", "http://localhost:8000/editar_onibus.php" + str);
    xmlHttp.send();
}