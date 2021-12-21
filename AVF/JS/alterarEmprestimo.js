
function preencheCampos(pobjReturnJSON) {
    let campo = document.getElementById("pCPF");
    let textnode = document.createTextNode(pobjReturnJSON.CPF);
    let elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    campo = document.getElementById("pNome");
    textnode = document.createTextNode(pobjReturnJSON.NOME);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento);

    campo = document.getElementById("consignado");
    textnode = document.createTextNode(pobjReturnJSON.CREDITO);
    elemento = textnode.textContent;
    campo.setAttribute("value", elemento); 
    /*
    let spctrue = document.getElementsByName("spctrue");
    textnode = document.createTextNode(pobjReturnJSON.spctrue);
    elemento = textnode.textContent;
    for (let i = 0; i < spctrue.length; i++) {
        if (spctrue[i].value == elemento) {
            spctrue[i].checked = true;
        }
    }
*/
    let dbRENDA = document.getElementsByName("currency-field");
    textnode = document.createTextNode(pobjReturnJSON.RENDA);
    elemento = textnode.textContent;
    for (let i = 0; i < dbRENDA.length; i++) {SPC
        if (dbRENDA[i].value == elemento) {
            dbRENDA[i].checked = true;
        }
    }

    let dbParcelas = document.getElementsByName("quantity");
    textnode = document.createTextNode(pobjReturnJSON.PARCELAS);
    elemento = textnode.textContent;
    for (let i = 0; i < rdbArCondicionado.length; i++) {
        if (dbParcelas[i].value == elemento) {
            dbParcelas[i].checked = true;
        }
    }

}
 
function EnviarForm(pNome, pCPF, pCred, pSPC, pRenda, pParcelas) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log("Chegou resposta: " + this.responseText)
            if (this.responseText === "sucesso") {
                alert("Editado com sucesso");
            } else {
                alert(this.responseText);
            }
            
            window.location.replace("http://localhost:8000/index.html");
        }
    }
    let str =   "&id=" + pCPF +
                "&nome=" + pNome +
                "&credito=" + pCred +
                "&SPC=" + pSPC +
                "&renda=" + pRenda +
                "&parcelas=" + pParcelas +
    xmlHttp.open("GET", "http://localhost:8000/alterarEmprestimo.php" + str);
    xmlHttp.send();
}