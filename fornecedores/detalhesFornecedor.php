<?php
require "config.php";
$valido = false;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (
        isset($_GET["cod_fornecedor"]) &&
        !empty($_GET["cod_fornecedor"])
    ) {
        $cod_fornecedor = addslashes($_GET["cod_fornecedor"]);
        $valido = true;
    }
}
if ($valido) {
    $sql = "SELECT * FROM Fornecedor WHERE cod_fornecedor =
'$cod_fornecedor';";
    try {
        $sql = $pdo->query($sql);
        $fornecedor = $sql->fetch();
        echo "
 <form action='$_GET' method=''>
 <table>
 <tr>
 <td style='width: 150px;'>Nome Fantasia: </td>
 <td><input type='text'
value='" . $fornecedor['nome_fantasia'] . "'></td>
 </tr>
 <tr>
 <td style='width: 150px;'>Razão Social: </td>
 <td><input type='text'
value='" . $fornecedor['razao_social'] . "'></'td>
 </tr>
 <tr>
 <td style='width: 150px;'>CNPJ: </td>
 <td><input type='text'
value='" . $fornecedor['CNPJ'] . "'></td>
 </tr>
 <tr>
 <td style='width: 150px;'>E-mail: </td>
 <td><input type='text'
value='" . $fornecedor['email'] . "'></td>
 </tr>
 <tr>
 <td style='width: 150px;'>Telefone 1: </td>
 <td><input type='text'
value='" . $fornecedor['tel1'] . "'></td>
 </tr>
 <tr>
 <td style='width: 150px;'>Telefone 2: </td>
 <td><input type='text'
value='" . $fornecedor['tel2'] . "'></td>
 </tr>
 </table>
 </form>
 <a href='fornecedor.php'><button>Voltar</button></a>";
    } catch (\Exception $e) {
        echo "Erro na exibição do fornecedor.<br>";
        $e->getMessage();
    }
}
