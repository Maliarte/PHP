<!--                            Atividade II: Lista de Fornecedores
                                Docente: Andre Neves
                                Discente: Marília Silva

 -->

<?php
require "config.php";
echo "
<form action='adicionarFornecedor.php' method='$_POST'>
 <table>
        <tr>
            <td style='width: 150px;'>Nome Fantasia: </td>
            <td><input type='text' name='nome_fantasia' required></td>
        </tr>
        <tr>
            <td style='width: 150px;'>Razão Social: </td>
            <td><input type='text' name='razao_social' required></td>
        </tr>

        <tr>
            <td style='width: 150px;'>CNPJ: </td>
            <td><input type='text' name='CNPJ' required></td>
        </tr>
        <tr>
            <td style='width: 150px;'>E-mail: </td>
            <td><input type='email' name='email'></td>
        </tr>
        <tr>
            <td style='width: 150px;'>Telefone 1: </td>
            <td><input type='text' name='tel1' required></td>
        </tr>
        <tr>
            <td style='width: 150px;'>Telefone 2: </td>
            <td><input type='text' name='tel2'></td>
        </tr>
 </table>
 <input type='submit' value='Cadastrar'>
</form>

<a href='fornecedor.php'><button>Voltar</button></a>
";



$valido = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["razao_social"]) &&
        !empty($_POST["razao_social"]) &&
        isset($_POST["nome_fantasia"]) &&
        !empty($_POST["nome_fantasia"]) &&
        isset($_POST["CNPJ"]) && !empty($_POST["CNPJ"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST["tel1"]) && !empty($_POST["tel1"]) &&
        isset($_POST["tel2"])
    ) {
        $razao_social =
            addslashes(converteMaiusculo($_POST["razao_social"]));
        $nome_fantasia =
            addslashes(converteMaiusculo($_POST["nome_fantasia"]));
        $CNPJ = addslashes(trataString($_POST["CNPJ"]));
        $email = addslashes($_POST["email"]);
        $tel1 = addslashes(trataString($_POST["tel1"]));
        $tel2 = addslashes(trataString($_POST["tel2"]));
        $valido = true;
    }
    if ($valido) {
        $sqlCommand = "SELECT * FROM Fornecedor WHERE CNPJ =
'$CNPJ';";
        $sqlCommand = $pdo->query($sqlCommand);
        $continua = false;
        if ($sqlCommand->rowCount() >= 1) {
            echo "CNPJ já cadastrado no sistema.";
        } else {
            $continua = true;
        }
        if ($continua) {
            $sqlCommand = "INSERT INTO Fornecedor set razao_social =
'$razao_social',
 nome_fantasia = '$nome_fantasia',
 CNPJ = '$CNPJ',
 email = '$email',
 tel1 = '$tel1',
 tel2 = '$tel2';";
            try {
                $sql = "START TRANSACTION;";
                $sql = $pdo->query($sql);
                $sqlCommand = $pdo->query($sqlCommand);
                $sql = "COMMIT;";
                $sql = $pdo->query($sql);
                echo "Fornecedor cadastrado com sucesso.";
            } catch (Exception $e) {
                $sql = "ROLLBACK;";
                $sql = $pdo->query($sql);
                echo "Erro no cadastro<br>";
                $e->getMessage();
            }
        }
    }
}
function trataString($valor)
{
    $valor = trim($valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace(",", "", $valor);
    $valor = str_replace("-", "", $valor);
    $valor = str_replace("/", "", $valor);
    $valor = str_replace("+", "", $valor);
    $valor = str_replace(" ", "", $valor);
    $valor = str_replace("_", "", $valor);
    return $valor;
}
function converteMaiusculo($palavra)
{
    return strtr(
        strtoupper($palavra),
        "àáâãäåæçèéêëìíîïðñòóôõö÷øùüúþÿ",
        "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÜÚÞß",
    );
}
