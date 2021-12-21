function listaEmprestimo() {
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

    xmlHttp.open("GET", "http://localhost:8000/listarEmprestimos.php" + str);
    xmlHttp.send();
}

function NomeValido(pNome){
    if (pNome == "" || pNome.length <= 3 || pNome.length > 20) {
        return false;
    }
    return true;
}

function validarForm() {
    let objForm = document.getElementById("cadAssoc");//nao usual
    console.log("objForm: " + objForm.innerHTML);
    //let nome2....
 
    let strNome = document.getElementById("nome").value;
    let strCpf = document.getElementById("cpf").value;
    
    console.log("nome:" + strNome +  "cpf:" + strCpf ); msgErro = "";
    if (!NomeValido(strNome)) {
    msgErro = "Nome não pode ser vazio. \n";
    }
 
    if (!ValidarDigCPF(strCpf)) {
    msgErro =+ "CPF não é valido. \n";
    }
    if (msgErro == "") ;
}
