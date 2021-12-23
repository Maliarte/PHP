<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alterar Sala</title>
</head>
<body>
<a href="incluir.php">Inserir Candidato</a><br>
<a href="listar.php">Listar Candidato</a><br>
<br><br>

<?php
$sala = $_POST["sala"];
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

  
    $sqlUpdate = "UPDATE `candidatos` SET `id`='$id',`cpf`=' $cpf',`nome`='$nome',`email`='$email',`cargo`='$cargo',`sala`='$sala' WHERE 1";
    $result = $conn->query($sqlUpdate);
} else {
    $ehPost = false;
}

?>
<form action="alterar_Sala_candidato.php" method="POST">
       <h1><br><br>| Alterar Sala |</h1><br><br>
        Identidade: <input type="number" name="id"><br>
        CPF: <input type="text" name="cpf"><br>
        nome: <input type="text" name="nome"><br>
        email: <input type="text" name="email"><br>
        cargo: <input type="text" name="cargo"><br>
        sala: <input type="number" name="sala"><br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>