<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Incluir</title>
    <style>
        	ul{list-style:none;}
			
			.break{margin:10px;}
    </style>
</head>

<body>
<?php
    $ehPost = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id    = $_POST["id"];
        $cpf   = $_POST["cpf"];
        $nome  = $_POST["nome"];
        $email =  $_POST["email"];
        $cargo =  $_POST["cargo"];
        $sala =  $_POST["sala"];


        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "candidatos";
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        if ($conn->connect_error) {
            die("Conexão com erro " . $conn->connect_error);
        }

        
        $sqlInsert = "INSERT INTO `candidatos`(`id`, `cpf`, `nome`, `email`, `cargo`, `sala`) VALUES ('$id','$cpf','$nome','$email','$cargo','$sala')";
        $result = $conn->query($sqlInsert);
    } else {
        $ehPost = false;
    }
    ?>
    <a href="listar.php">Lista Candidato</a><br>
    <a href="insere_fiscal.php">Insere Fiscal</a><br>
    <a href="alterar_Sala_candidato">Alterar Sala</a><br>
    <br>
    <br>
    <hr>
    <h3><?php if ($ehPost) {
            echo "Candidato $nome inserido com sucesso";
        } ?>
    <hr>
    <form action="incluir.php" method="POST" id="frmCadastro" name="frmCadastro">
       <h1><br><br>| Area Candidato |</h1><br><br>

       <ul> 
			<li>Identidade: <span id="rsID">&nbsp;</span></li>
			<li><input type="text" id="txtID" name="id" placeholder="Digite sua identidade" /></li>

            <li>CPF: <span id="rsCpf">&nbsp;</span></li>
			<li><input type="text" id="txtCpf" name="cpf"placeholder="Digite Seu cpf" /></li>

            <li>Nome: <span id="rsNome">&nbsp;</span></li>
			<li><input type="text" id="txtNome" name="nome"placeholder="Seu nome aqui" /></li>

            <li>Email: <span id="rsEmail">&nbsp;</span></li>
			<li><input type="email" id="txtEmail" name="email"placeholder="email@dominio.com" /></li>

            <li>Cargo: <span id="rsCargo">&nbsp;</span></li>
			<li><input type="text" id="txtCargo" name="cargo" placeholder="Analista de Sistemas" /></li>

            <li>Sala: <span id="rsSala">&nbsp;</span></li>
			<li><input type="number" id="txtSala" name="sala" placeholder="509" /></li>

            <div class="break"></div>
        <button type="submit">Enviar</button>
    </form>
<script>
document.addEventListener("DOMContentLoaded", function(){ //Cria um evento para quando a página for carregada

document.getElementById("frmCadastro").addEventListener("submit", function(e){
    const id = document.getElementById("txtID").value;
    const cpf = document.getElementById("txtCpf").value;
    const nome  = document.getElementById("txtNome").value;//Carregamos o valor do campo nome
    const email = document.getElementById("txtEmail").value;//Carregamos o valor do campo e-mail
    const cargo = document.getElementById("txtCargo").value;//Carregamos o valor do campo senha
    const sala = document.getElementById("txtSala").value;
    
    let validacoes = 0; //Variável de controle, se inicia com zero

    if(id.length){
        document.getElementById("rsID").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsID").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsID").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsID").innerHTML = "*";//Alteramos o valor do Span para *
    }
    
    if(cpf.length==11){
        document.getElementById("rsCpf").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsCpf").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsCpf").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsCpf").innerHTML = "*";//Alteramos o valor do Span para *
    }

    if(nome.length > 10){ //Se o nome conter mais de 10 caracteres.
        document.getElementById("rsNome").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsNome").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsNome").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsNome").innerHTML = "*";//Alteramos o valor do Span para *
    }
    
    if(email.indexOf('@') > 0 && email.indexOf('.') > 0){ //Se houver @ e . então é um e-mail válido
        document.getElementById("rsEmail").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsEmail").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsEmail").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsEmail").innerHTML = "*";//Alteramos o valor do Span para *
    }
    
    if(cargo.length > 4){ //Se a senha conter mais de 4 caracteres, é uma senha válida
        document.getElementById("rsCargo").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsCargo").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsCargo").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsCargo").innerHTML = "*";//Alteramos o valor do Span para *
    }

    if(sala > 0){ 
        document.getElementById("rsSala").style.color = "green";//Alteramos a cor do Span para Verde
        document.getElementById("rsSala").innerHTML = "OK";//Alteramos o valor do Span para OK
        validacoes++;//Incrementamos 1 a variável de controle
    }else{
        document.getElementById("rsSala").style.color = "red";//Alteramos a cor do Span para Vermelho
        document.getElementById("rsSala").innerHTML = "*";//Alteramos o valor do Span para *
    }
    
    if(validacoes < 6){ //Se todos os campos estiverem válidos, a variável de controle terá o valor três, senão...
        e.preventDefault();//Não envia o formulário e retorna o estado padrão.
        //o e representa o evento, que vem como parâmetro no evento Submit
    }	
});
});
</script>
</body>

</html>
