<?php
require "config.php";
$sql = "SELECT * FROM Fornecedor;";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $fornecedor) {
        echo "<tr>";
        echo "<td>" . $fornecedor["nome_fantasia"] . "</td>";
        echo "<td>" . $fornecedor["tel1"] . "</td>";
        echo "<td>" . $fornecedor["email"] . "</td>";
        echo "<td>
 <a href='detalhesFornecedor.php?
    cod_fornecedor=" . $fornecedor['cod_fornecedor'] . "'>
    <button>Detalhes</button>
</a>
 <a href='editarFornecedor.php?
cod_fornecedor=" . $fornecedor['cod_fornecedor'] . "'>
<button>Editar</button></a>
 <a href='excluirFornecedor.php?
cod_fornecedor=" . $fornecedor['cod_fornecedor'] . "'>
<button>Excluir</button></a>
 </td>
 </tr>
 ";
    }
} else {
    echo "Nenhum fornecedor cadastrado no sistema.";
}
