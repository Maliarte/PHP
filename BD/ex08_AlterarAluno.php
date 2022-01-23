<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Alunos</title>
</head>
<body>
<a href="ex08_listarAlunos.php">Listar Aluno</a><br>
<a href="ex08_IncluirAluno.php">Incluir Aluno</a><br>

<h1>Alterar Alunos</h1>
<br><br>
<?php
        //configuracoes iniciais

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancodeDados = "sys_academico";

//estabelendo conexao com biblioteca MySQL
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);

if ($conn->connect_error) {
    die("Conexao com o banco de dados falhou!!!");
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "SELECT * from Alunos where id = $id";

    $result = $conn->query($sql);
    
    $linhaAluno = $result->fetch_assoc();

?>
<form action="ex08_AlterarAluno.php" method="POST">
    nome:   <input type="text" name="nome" value="<?php echo $linhaAluno['nome']; ?>"><br>
    email:   <input type="text" name="email" value="<?php echo $linhaAluno['email']; ?>"><br>
    CPF:   <input type="text" name="cpf" value="<?php echo $linhaAluno['cpf']; ?>"><br>
    Matricula:   <input type="text" name="matricula" value="<?php echo $linhaAluno['matricula']; ?>"><br>
    <input type="hidden" name="id" value="<?php echo $linhaAluno['id']; ?>">
    <input type="submit" value="enviar">
</form>
<?php
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $matricula = $_POST["matricula"];

    $sql = "UPDATE Alunos SET nome='$nome', email='$email', cpf='$cpf', matricula='$matricula' where id = $id";
    $result = $conn->query($sql);
    echo "Aluno $nome alterado com sucesso.";
}
?>
</body>
</html>