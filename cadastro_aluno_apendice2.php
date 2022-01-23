<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alunos no mesmo Arquivo</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["aluno"];
    $matricula = $_POST["mat"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $nomeArquivo ="AlunosNovos_2021_2.txt";

    //quando arquivo eh criado eu ponho $txtC, depois nao escrevo mais ela só insiro os dados do aluno
    $txtC= "nome; matricula; email;idade\n";
    
    if (file_exists($nomeArquivo)) {
        echo "Arquivo $nomeArquivo existe";
    } else {
        echo "\nArquivo $nomeArquivo não existe"\n;
        file_put_contents($nomeArquivo, $txtC);
    }
    $txt = "$nome;$email;$idade\n";
    file_put_contents($nomeArquivo, $txt, FILE_APPEND);
   
    
} else {
    $ehPost = false;
}
?>
<a href="ex4_cadAluno.php">Inserir Aluno</a><br>
<a href="ex4_altAluno.php">Alterar Aluno</a><br>
<a href="ex4_listAluno.php">Listar Aluno</a><br>
<a href="ex4_excluirAluno.php">Excluir Aluno</a><br><br>

<h1>Inserir Aluno</h1>

<h3><?php if ($ehPost) {echo "Aluno $nome inserido com sucesso";} ?></h3>

<form action="cadastro_aluno_apendice2.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    matricula: <input type="text" name="mat"><br>
    email:   <input type="text" name="email"><br>
    idade:   <input type="text" name="idade"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>