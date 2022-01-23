<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="ex4_cadAluno.php">Inserir Aluno</a><br>
<a href="ex4_altAluno.php">Alterar Aluno</a><br>
<a href="ex4_listAluno.php">Listar Aluno</a><br>
<a href="ex4_excluirAluno.php">Excluir Aluno</a><br><br>

<h1>Alterar Aluno</h1>
<?php
$mat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["aluno"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mat = $_POST["matricula"];
    
} else {
    $mat = $_GET["matricula"];
}

?>
<form action="ex4_alterarAluno.php" method="POST">
    matricula: <input type="hidden" name="matricula" value="123456"> 123456<br>
    nome:   <input type="text" name="aluno" value="Jose da Silva"><br>
    email:   <input type="text" name="email" value="ze@faeterj.edu.br"><br>
    idade:   <input type="text" name="idade" value="22"><br>
    <input type="submit" value="Alterar">
</form>

</body>
</html>