<?php

$sucesso = false;

$nome = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["aluno"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $matricula = $_POST["matricula"];

                                /*
                                    sistema gerenciador de banco de dados
                                    (sgbd/mariadb,postgree,sqlserver,oracle,plsql) 
                                    '-> entendem sql
                                 */
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "sys_academico";

    //conexao com banco biblioteca mysqli
    $conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);

        if  ( $conn -> connect_error ) {
            die ( "Conexao com o banco de dados falhou!!!" );
        }
        //else 'implicito' conexao realizada com sucesso!
        $sql = " INSERT INTO Alunos(`nome`, `email`, `cpf`, `matricula`)
                VALUES (  '$nome' ,
                            '$email',
                            '$cpf'  ,
                            '$matricula'   )";


        // $result = $conn -> query($sql);

        if ($conn -> query ($sql) === TRUE) {
                        $sucesso = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Incluir Aluno</title>
</head>

<body>
    <a href="ex08_listarAlunos.php">Listar Aluno</a><br>
    <a href="ex08_IncluirAluno.php">Incluir Aluno</a><br>
    <a href="ex08_AlterarAluno.php">Alterar Aluno</a><br>

    <h1>Inserir Aluno</h1>
    <h3>
        <?php 
                if ($sucesso) {
                echo "Cliente $nome inserido com sucesso";
                } else {
                echo "Deu Ruim";
                } 
        ?>
    </h3>

    <form action="ex08_IncluirAluno.php" method="POST">

                nome: <input type="text" name="aluno">
                <br>
                email: <input type="text" name="email">
                <br>
                CPF: <input type="text" name="cpf">
                <br>
                Matricula: <input type="text" name="matricula">
                <br>

        <!--btn-->
        <input type="submit" value="enviar">
        
    </form>
</body>

</html>