<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>

    <link rel="stylesheet" href="./Style/style.css">
    
</head>

<body>
    <h1>Editar Usuário</h1>
    <?php
    require "data.php";
    require "auxiliar.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        if (file_exists($csv)) {
            $id = $_GET['id'];
            $output = fopen($csv, 'r');
            if(file_exists($temp)) unlink($temp);
            $outputAux = fopen($temp, 'w');
            if(file_exists($tempUser)) unlink($tempUser);
            $outputUser = fopen($tempUser, 'w');
            while (($data = fgetcsv($output, 1024)) != FALSE) {
                if (reset($data) == $id) {
                    fputcsv($outputUser, $data);
                    continue;
                }
                fputcsv($outputAux, $data);
            }

            $output = fopen($tempUser, 'r');

            while (list($id, $nome, $matricula, $funcao) = fgetcsv($output, 1024, ',')) {
                echo "<div class='container'>
                <form action='' method='post'>
                    <table class='cadastrar'>
                <tr>
                    <td>Id: </td>
                    <td><input type='text' name='id' value='" . $id . "' size='30' required></td>
                </tr>    
                <tr>
                    <td>Nome: </td>
                    <td><input type='text' name='nome' value='" . upper($nome) . "' size='30' required></td>
                </tr>
                <tr>
                    <td>Matrícula </td>
                    <td><input type='text' name='matricula' value='" . $matricula . "' size='30' required></td>
                </tr>
                <tr>
                    <td>Função: </td>
                    <td><input type='text' name='funcao' value='" . upper($funcao) . "' size='30' required></td>
                </tr>";
            }
            echo "</table>
            <input class='edit_btn' style='display: block; margin:0 auto'  type='submit' value='Editar Usuário'>
            </form>
            <a href='usuario.php'><button class='return_btn'>Voltar</button></a>
            </div>";
            fclose($output);
            fclose($outputAux);
            fclose($outputUser);
        }
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = strtolower($_POST['nome']);
        $funcao = strtolower($_POST['funcao']);
        $linha = array(
            $_POST['id'],
            $nome,
            $_POST['matricula'],
            $funcao
        );
        $output = fopen("temp.csv", 'a');
        fputcsv($output, $linha);
        fclose($output);
        unlink($tempPaciente);
        rename($temp, $csv);
        echo "<p class='center'>Usuário editado com sucesso</p>";
        echo "<a href='usuario.php'><button class='return_btn'>Voltar</button></a>";
    }
    ?>

</body>

</html>