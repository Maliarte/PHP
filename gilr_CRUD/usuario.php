<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>

    <link rel="stylesheet" href="./Style/style.css">

</head>

<body>
    <h1>USUÁRIOS</h1>
    <?php
    require "data.php";
    require "auxiliar.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(file_exists($temp)) unlink($temp);
        if(file_exists($tempUser)) unlink($tempUser);
        echo "<div class='container'>";
        echo "<table>
            <tr>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Função</th>
                <th>Ação</th>
            </tr>";
        if (file_exists($csv)) {
            $output = fopen($csv, 'r');

            while (list($id, $nome, $matricula, $funcao) = fgetcsv($output, 1024, ',')) {
                echo "<tr>";
                echo "<td>" . upper($nome) . "</td>";
                echo "<td>$matricula</td>";
                echo "<td>" . upper($funcao) . "</td>";
                echo "<td>
                            <a href='editar_usuario.php?id=" . $id . "'><button class='edit_btn'>Editar</button></a>
                            <a href='apagar_usuario.php?id=" . $id . "'><button class='del_btn'>Apagar</button></a>
                         </td>";
                echo "</tr>";
            }
            fclose($output);
        }
        echo "</table>";
        echo "</div>";

        echo "<hr>";

        echo "<div class='container'>
        <h2 class='center'>Adicionar Usuário</h2>
        <form action='' method='post'>
            <table class='cadastrar'>
                <tr>
                    <td>Nome: </td>
                    <td><input type='text' name='nome' size='30' required></td>
                </tr>
                <tr>
                    <td>Matrícula: </td>
                    <td><input type='text' name='matricula' size='30' required></td>
                </tr>
                <tr>
                    <td>Função: </td>
                    <td><input type='text' name='funcao'  size='30' required></td>
                </tr>
            </table>
            <input class='add_btn' type='submit' value='Adicionar Usuário'>
        </form>
    </div>";
        echo "<hr>";
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = strtolower($_POST['nome']);
        $id = time() * rand(1, 9);
        $linha = array(
            $id,
            $nome,
            $_POST['matricula'],
            $_POST['funcao'],
        );
        if (file_exists($csv)) {
            $output = fopen($csv, 'a');
            fputcsv($output, $linha);
            fclose($output);
            echo "<p class='center'>Usuário inserido com sucesso</p>";
        } else {
            $output = fopen($csv, 'w');
            fputcsv($output, $linha);
            fclose($output);
            echo "<p class='center'>Usuário inserido com sucesso</p>";
        }
        echo "<a href='usuario.php'><button class='return_btn'>Voltar</button></a>";
    }
    ?>

</body>

</html>