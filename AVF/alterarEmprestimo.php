<?php require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $cpf = $_GET['cpfform'];
    $nome = $_GET['nomeform'];
    $credito = $_GET['consignado'];
    $spc = $_GET['spctrue'];
    $renda = $_GET['currency-field'];
    $parcelas = $_GET['quantity'];
    
    $msg = "";
    try {
        $sql = "UPDATE `EMPRESTIMO`  set 
            `CPF` = '$cpf',  
            `NOME` = '$nome',
            `CREDITO` = '$credito',
            `SPC` = '$spc',
            `RENDA` = '$renda',
            `PARCELAS` = '$parcelas',

            WHERE `CPF` = '$cpf'";

        $result = $conn->query($sql);

        $sql = "SELECT * FROM EMPRESTIMO 
                WHERE `CPF` = '99999999999' AND
                `NOME` = '$nome' AND
                `CREDITO` = '$credito' AND
                `SPC` = '$spc' AND
                `RENDA` = '$renda'  AND
                `PARCELAS` = '$parcelas'";
        $result = $conn->query($sql);
        $arrayEmprestimo[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            $arrayEmprestimo[$i] = $linha;
            $i++;
        }
        $msg = "sucesso";
        //echo json_encode($arrayEmprestimo, JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        $msg = $e->getMessage() . "Erro ao editar.<br>";
    } finally {
        echo $msg;
    }
       
}

?>