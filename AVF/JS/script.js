function listaEmprestimo() {
  let xmlHttp = new XMLHttpRequest();
  xmlHttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let obj = JSON.parse(this.responseText);
      for (i = 0; i < obj.length; i++) {
        let linha = obj[i];
        criarLinhaTabela(linha);
      }
    }
  };
  xmlHttp.open("GET", "http://localhost:8000/listarEmprestimo.php");
  xmlHttp.send();
}

function criarLinhaTabela(pobjReturnJSON) {
  let tr = document.createElement("tr");
  let td = document.createElement("td");
  let textnode = document.createTextNode(pobjReturnJSON.CPF);
  let elemento = textnode.textContent;
  let str = "";
  td.setAttribute("id", elemento);
  td.appendChild(textnode);
  tr.appendChild(td);

  let td2 = document.createElement("td");
  textnode = document.createTextNode(pobjReturnJSON.NOME);
  elemento = textnode.textContent;
  td2.setAttribute("id", elemento);
  td2.appendChild(textnode);
  tr.appendChild(td2);

  let td3 = document.createElement("td");
  textnode = document.createTextNode(pobjReturnJSON.CREDITO);
  elemento = textnode.textContent;
  td3.setAttribute("id", elemento);
  td3.appendChild(textnode);
  tr.appendChild(td3);

  let td4 = document.createElement("td");
  textnode = document.createTextNode(pobjReturnJSON.SPC);
  elemento = textnode.textContent;
  td4.setAttribute("id", elemento);
  td4.appendChild(textnode);
  tr.appendChild(td4);

  let td5 = document.createElement("td");
  textnode = document.createTextNode(pobjReturnJSON.RENDA);
  elemento = textnode.textContent;
  td5.setAttribute("id", elemento);
  td5.appendChild(textnode);
  tr.appendChild(td5);

  let td6 = document.createElement("td");
  textnode = document.createTextNode(pobjReturnJSON.PARCELA);
  elemento = textnode.textContent;
  td6.setAttribute("id", elemento);
  td6.appendChild(textnode);
  tr.appendChild(td6);

  let tr_fim = document.getElementById("ultimaLinha");
  tr_fim.parentNode.insertBefore(tr, tr_fim);
}


///////////////////////////////// CPF /////////////////////////////////////////
function cpfValido(pEmail) 
    {
        let reg = /\S+@\S+\.\S+/;
        return reg.test(pCpf);
    }

///////////////////////////////// MONETARIO /////////////////////////////////////////

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}


function ValidarForm() {
    /*  
        let uma declaração de criação de variavel Php E Mysql Desenvolvimento Web

    let permite que você declare variáveis limitando seu escopo no bloco, 
    instrução, ou em uma expressão na qual ela é usada. Isso é inverso da keyword var , 
    que define uma variável globalmente ou no escopo inteiro de uma função, 
    independentemente do escopo de bloco.
    */
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
   if (msgErro == "") {

    // passagem de parametros para o php
    EnviarForm(strNome, strCpf);
    }
   }
   
   function ValidarForm() {
  let strNome = "";
  let strCPF = "";
  let CREDITO = "";
  let SPC = "";
  strNome = document.getElementById("nomeform").value;
  strModelo = document.getElementById("cpfform").value;
  
  let strCredito = "";
  for (let i = 0; i < strCredito.length; i++) {
    if (strCredito[i].checked) {
      strCredito = strCredito[i].value;
    }
  }
  
  let msgErro = "";

}

//////////////

   function EnviarForm(pNome, pCpf) {
   let xmlHttp = new XMLHttpRequest();
   xmlHttp.onreadystatechange = function() {

   if (this.readyState == 4 && this.status == 200) 
   {
   console.log("Chegou resposta: " + this.responseText)
   document.getElementById("msg").innerHTML =this.responseText;
   }
   }
   xmlHttp.open("GET","http://localhost/3daw/incluirEmprestimo.php?nome=" + pNome + "&cpf=" + pCpf);
   xmlHttp.send();
   console.log("Enviei requisição");
   }