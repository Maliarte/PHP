<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>cadastro base</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nome = $_POST["aluno"];
 $email = $_POST["email"];
 $idade = $_POST["idade"];
} else {
 $ehPost = false;
}
?>
<a href="ex4_cadAluno.php">Inserir Aluno</a><br>
<a href="ex4_altAluno.php">Alterar Aluno</a><br>
<a href="ex4_listAluno.php">Listar Aluno</a><br>
<a href="ex4_excluirAluno.php">Excluir Aluno</a><br><br>
<h1>Inserir Aluno</h1>
<h3><?php if ($ehPost) {echo "Aluno $nome inserido com sucesso";} ?>
</h3>
<form action="ex03_If_ComForm.php" method="POST">
 nome: <input type="text" name="aluno"><br>
 email: <input type="text" name="email"><br>
 idade: <input type="text" name="idade"><br>
 <input type="submit" value="enviar">
</form>
</body>
</html>