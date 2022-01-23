<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listar Alunos</title>
</head>

<body>
    <a href="ex08_listarAlunos.php">Listar Aluno</a><br>
    <a href="ex08_IncluirAluno.php">Incluir Aluno</a><br>

    <h1>Listar Alunos</h1>
    <br><br>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Matricula</th>
            <th>Ações</th>
        </tr>
        <?php
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $bancodeDados = "sys_academico";
            $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
        if ($conn->connect_error) {
            die("Conexao com o banco de dados falhou!!!");
        }

        $sql = "Select id,nome,email,cpf,matricula from Alunos";
        //$sql = "Select * from Alunos";
        $result = $conn->query($sql);

        while ($linha = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['cpf'] . "</td>";
            echo "<td>" . $linha['matricula'] . "</td>";
            echo "<td><a href='ex08_AlterarAluno.php?id=" . $linha['id'] . "'>alterar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>