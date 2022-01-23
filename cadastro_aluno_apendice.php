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

    //quando arquivo nao existir ele apresenta a primeira linha
    $txt = "$nome; $email; $idade\n";
    
    //armazendo varios alunos no mesmo arquivo
    //olha o arquivo;  'flags' se o arquivo existir
    //escreve oq ta dentro de txt2 no final do arquivo'alunos novos' se
    //o arquivo nao existir ele cria e escreve $txt2
    
    file_put_contents("AlunosNovos.txt",$txt, FILE_APPEND);
   
    
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

<form action="cadastro_aluno_apendice.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    matricula: <input type="text" name="mat"><br>
    email:   <input type="text" name="email"><br>
    idade:   <input type="text" name="idade"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>