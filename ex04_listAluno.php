<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$nomeArquivo = "AlunosNovos_2021_2.txt";
$arquivoAluno = fopen($nomeArquivo, "r") or die("Erro leitura arquivo");
$cabecalho = fgets($arquivoAluno);
$x = 0;
while (!feof($arquivoAluno)) {
    $linha[] = fgets($arquivoAluno);

}
fclose($arquivoAluno);
?>
<a href="ex4_cadAluno.php">Inserir Aluno</a><br>
<a href="ex4_altAluno.php">Alterar Aluno</a><br>
<a href="ex4_listAluno.php">Listar Aluno</a><br>
<a href="ex4_excluirAluno.php">Excluir Aluno</a><br><br>

<h1>Listar Aluno</h1>

<table>
    <tr>
        <th>Nome Aluno</th>
        <th>matricula</th>
        <th>email</th>
        <th>idade</th>
        <th>ações</th>
    </tr>
<?php
    for ($x=0;$x <= count($linha); $x++)
echo "<tr>";
    echo "<td>Jose da silva</td>";
    echo  "<td>54654</td> ";
   echo  "<td>ze@faeterj.edu.br</td>";
   echo   "<td>21</td>";

    //</tr>
    ?>
</table>

</body>
</html>