<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Usuário</title>

    <link rel="stylesheet" href="./Style/style.css">

</head>

<body>
    <h1>Apagar Usuário</h1>
    <?php
    require "data.php";
    require "auxiliar.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<div class='container'>";
        echo "<form action='' method='post'>";
        echo "<table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Função</th>
                <th>Ação</th>
            </tr>";
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

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>" . upper($nome) . "</td>";
                echo "<td>$matricula</td>";
                echo "<td>" . upper($funcao) . "</td>";
                echo "<td><input class='del_btn' type='submit' value='Apagar Usuário'></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</form>";
            echo "<a href='usuario.php'><button class='return_btn'>Voltar</button></a>";
            echo "</div>";
            fclose($output);
            fclose($outputAux);
            fclose($outputUser);
        }
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        unlink($tempUser);
        rename($temp, $csv);
        echo "<p class='center'>Usuário apagado com sucesso</p>";
        echo "<a href='usuario.php'><button class='return_btn'>Voltar</button></a>";
    }
    ?>

</body>

</html>