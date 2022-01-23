<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nome de Arquivo Dinâmico</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["aluno"];
    $matricula = $_POST["mat"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    //"Aluno_$nome"."_$matricula.txt";
    $nomearquivo = "Aluno_$nome$matricula.txt";
    $arquivoAluno = fopen($nomearquivo, "w");
    $txt = "nome;email;idade\n";
    fwrite($arquivoAluno,$txt);
    $txt = $nome . ";" . $email . ";" . $idade . "\n";
    fwrite($arquivoAluno,$txt);
    $txt2 = "$nome;$email;$idade\n";
    fwrite($arquivoAluno,$txt2);
    fclose($arquivoAluno);
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

<form action="cadastro_aluno_nome_arquivo_dinamico.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    matricula: <input type="text" name="mat"><br>
    email:   <input type="text" name="email"><br>
    idade:   <input type="text" name="idade"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>