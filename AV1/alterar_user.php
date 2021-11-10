<!-- 
                        Atividade 2 3DAW NOITE 
                        Docente: André Neves
                        Discente: Marília Silva

               
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <h1>Jogos Mr. Falls </h1>
    <hr>
    <h1>Alterar Usuario</h1>
    <style>
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid #000;
            margin: 20px auto;
        }

        tr {
            background-color: #edf5fa;
        }

        td {
            padding: 2px 5px;
            text-align: center;
            font-size: small;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .add_btn {
            display: block;
            margin: 10px auto;
            background-color: #93c9e5;
            border: none;
            padding: 5px 8px;
        }

        .add_btn:hover {
            background-color: #6eb2d4;
            cursor: pointer;
        }

        .edit_btn {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #fbec5d;
            border: none;
            padding: 5px 8px;
            margin-right: 5px;
        }

        .edit_btn:hover {
            background-color: #fada5e;
            cursor: pointer;
        }

        .del_btn {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #fb8668;
            border: none;
            padding: 5px 8px;
        }

        .del_btn:hover {
            background-color: #e05936;
            cursor: pointer;
        }

        .return_btn {
            display: block;
            margin: 10px auto;
            background-color: #93c9e5;
            border: none;
            padding: 5px 8px;
        }

        .cadastrar {
            width: 40%;
        }

        .cadastrar td {
            text-align: left;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
   
<?php
        require "usuarios.php";

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            echo "<div class='container'>";
            echo "<table>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Ação</th>
                </tr>";

if (file_exists($csv)) {

//streaming - canal/ porta de acesso para o arquivo
    $output = fopen($csv, 'r');
            
            while   (list($id, $nome, $nascimento, $cpf, $telefone) = fgetcsv($output, 1024, ',')) {
                echo "<tr>";
                                                                            //strtoupper — Converte uma string para maiúsculas
                echo "<td>" . strtoupper($nome) . "</td>";
                echo "<td>$nascimento</td>";
                echo "<td>$cpf</td>";
                echo "<td>$telefone</td>";
                echo "<td>
                            
                            <a href='alterar_user.php?id=" . $id . "'><button class='edit_btn'>Alterar</button></a><br>
                            <a href='listar_one_user.php?id=" . $id . "'><button class='add_btn'>Listar Usuario</button></a><br>
                            <a href='listar_all_user.php?id=" . $id . "'><button class='add_btn'>Listar Todos</button></a><br>
                            <a href='delete_user.php?id=" . $id . "'><button class='del_btn'>Deletar</button></a><br>
                      
                        </td>";
                echo "</tr>";
            }
    fclose($output);
}
echo "</table>";
echo "</div>";

echo "<hr>";

echo "<div class='container'>

<form action='alterar_user.php' method='post'>
    <table class='cadastrar'>
        <tr>
            <td>Nome: </td>
            <td><input type='text' name='nome' id='nome' size='30' required></td>
        </tr>
        <tr>
            <td>Nascimento: </td>
            <td><input type='date' name='nascimento' id='' pplaceholder='dd-mm-yyyy' required></td>
        </tr>
        <tr>
            <td>CPF: </td>
            <td><input type='text' name='cpf' id='' size='30' required></td>
        </tr>
        <tr>
            <td>Telefone: </td>
            <td><input type='tel' name='telefone' id='' size='30'></td>
        </tr>
       
    </table>
    <input class='add_btn' type='submit' value='Alterar User'>
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
    $_POST['nascimento'],
    $_POST['cpf'],
    $_POST['telefone'],  
);
if (file_exists($csv)) {
    $output = fopen($csv, 'a'); //append acrescenta ao arquivo
    fputcsv($output, $linha);
    fclose($output);
    echo "<p class='center'>Usuario Alterado com sucesso</p>";
} else {
    $output = fopen($csv, 'w');
    fputcsv($output, $linha);
    fclose($output);
    echo "<p class='center'>Usuario Alterado com sucesso</p>";
}
echo "<a href='av1-marilia.php'><button class='return_btn'>Voltar</button></a>";
}
?>

</body>

</html>