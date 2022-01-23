/******* LISTAR ONIBUS *******/
function listaOnibus() {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            for (i = 0; i < obj.length; i++) {
                let linha = obj[i];
                criarLinhaTabela(linha);
            }
        }
    }
    xmlHttp.open("GET", "http://localhost:8000/listar_onibus.php");
    xmlHttp.send();
}
function criarLinhaTabela(pobjReturnJSON) {
    let tr = document.createElement("tr"); 
    let td = document.createElement("td");
    let textnode = document.createTextNode(pobjReturnJSON.MARCA);
    let elemento = textnode.textContent;
    let str = "";
    td.setAttribute("id", elemento);
    td.appendChild(textnode);
    tr.appendChild(td);

    let td2 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.MODELO);
    elemento = textnode.textContent;
    td2.setAttribute("id", elemento);
    td2.appendChild(textnode);
    tr.appendChild(td2);

    let td3 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.ASSENTOS);
    elemento = textnode.textContent;
    td3.setAttribute("id", elemento);
    td3.appendChild(textnode);
    tr.appendChild(td3);

    let td4 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.BANHEIRO);
    elemento = textnode.textContent;
    td4.setAttribute("id", elemento);
    td4.appendChild(textnode);
    tr.appendChild(td4);

    let td5 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.AR_CONDICIONADO);
    elemento = textnode.textContent;
    td5.setAttribute("id", elemento);
    td5.appendChild(textnode);
    tr.appendChild(td5);

    let td6 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.CHASSI);
    elemento = textnode.textContent;
    td6.setAttribute("id", elemento);
    td6.appendChild(textnode);
    tr.appendChild(td6);

    let td7 = document.createElement("td");
    textnode = document.createTextNode(pobjReturnJSON.PLACA);
    elemento = textnode.textContent;
    //str = "?placa=" + elemento;
    td7.appendChild(textnode);
    td7.setAttribute("id", elemento);
    tr.appendChild(td7);
    str = "?id=" + document.createTextNode(pobjReturnJSON.ID).textContent;
    let td8 = document.createElement("td");
    let editarLink = document.createElement("A");
    let nomeEditarLink = document.createTextNode("Editar");
    let strEditar = "http://localhost:8000/editaronibus.html" + str;
    editarLink.setAttribute("href", strEditar);
    editarLink.appendChild(nomeEditarLink);
    td8.appendChild(editarLink);
    let space = document.createTextNode("  /  ");
    td8.appendChild(space);
    let excluirLink = document.createElement("A");
    let nomeExcluirLink = document.createTextNode("Excluir");
    let strExcluir = "http://localhost:8000/excluironibus.html" + str;
    excluirLink.setAttribute("href", strExcluir);
    excluirLink.appendChild(nomeExcluirLink);
    td8.appendChild(excluirLink);
    tr.appendChild(td8);

    let tr_fim = document.getElementById("ultimaLinha");
    tr_fim.parentNode.insertBefore(tr, tr_fim);
}

/******* CADASTRAR ONIBUS *******/
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

function ValidarForm() {
    let strMarca = "";
    let strModelo = "";
    let strChassi = "";
    let strPlaca = "";
    strMarca = document.getElementById("marcaform").value;
    strModelo = document.getElementById("modeloform").value;
    let rdbAssentos = document.getElementsByName("assentos");
    let strAssentos = "";
    for (let i = 0; i < rdbAssentos.length; i++) {
        if (rdbAssentos[i].checked) {
            strAssentos = rdbAssentos[i].value;
        }
    }
    let rdbBanheiro = document.getElementsByName("banheiroform");
    let strBanheiro = "";
    for (let i = 0; i < rdbBanheiro.length; i++) {
        if (rdbBanheiro[i].checked) {
            strBanheiro = rdbBanheiro[i].value;
        }
    }
    let rdbArCondicionado = document.getElementsByName("ar_condicionadoform");
    let strAr_condicionado = "";
    for (let i = 0; i < rdbArCondicionado.length; i++) {
        if (rdbArCondicionado[i].checked) {
            strAr_condicionado = rdbArCondicionado[i].value;
        }
    }
    strChassi = document.getElementById("chassiform").value;
    strPlaca = document.getElementById("placaform").value;
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
        EnviarForm(
                strMarca.toUpperCase(), 
                strModelo.toUpperCase(), 
                strAssentos, 
                strBanheiro, 
                strAr_condicionado, 
                strChassi.toUpperCase(), 
                strPlaca.toUpperCase()
                );
    }
}
function EnviarForm(pMarca, pModelo, pAssentos, pBanheiro, pAr_condicionado, pChassi, pPlaca) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Chegou resposta: " + this.responseText)
            // document.getElementById("msg").innerHTML = this.responseText;
        }
    }

    xmlHttp.open("GET", "http://localhost:8000/adicionar_onibus.php?marca=" + pMarca + 
        "&modelo=" + pModelo + 
        "&assentos=" + pAssentos + 
        "&banheiro=" + pBanheiro + 
        "&ar_condicionado=" + pAr_condicionado + 
        "&chassi=" + pChassi + 
        "&placa=" + pPlaca);
    xmlHttp.send();
    location.reload();
}