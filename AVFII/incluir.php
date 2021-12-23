<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Incluir</title>
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
    <form action="incluir.php" method="POST">
       <h1><br><br>| Area Candidato |</h1><br><br>
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
