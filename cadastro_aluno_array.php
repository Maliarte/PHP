<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alunos no mesmo Arquivo pegando linha a linha por Array</title>
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
   
    /*
    
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
                        for ($x=0;$x <= $linha->lenght)
                        echo "<tr>";
                        echo "<td>Jose da silva</td>"
                        echo "<td>54654</td> "
                        echo "<td>ze@faeterj.edu.br</td>"
                        echo "<td>21</td>"
                        </tr>
                        ?>
                </table>
                </body>
                </html> 
                
                */


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
