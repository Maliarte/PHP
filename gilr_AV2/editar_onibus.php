<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $assentos = $_GET['assentos'];
    $banheiro = $_GET['banheiro'];
    $ar_condicionado = $_GET['ar_condicionado'];
    $chassi = $_GET['chassi'];
    $placa = $_GET['placa'];
    $msg = "";
    try {
        $sql = "UPDATE ONIBUS  set MARCA = '$marca',  
            MODELO = '$modelo',
            ASSENTOS = '$assentos',
            BANHEIRO = '$banheiro',
            AR_CONDICIONADO = '$ar_condicionado',
            CHASSI = '$chassi',
            PLACA = '$placa'
            WHERE ID = '$id'";
        $result = $conn->query($sql);

        $sql = "SELECT * FROM ONIBUS 
                WHERE ID = '99' AND
                MODELO = '$modelo' AND
                ASSENTOS = '$assentos' AND
                BANHEIRO = '$banheiro' AND
                AR_CONDICIONADO = '$ar_condicionado' AND
                CHASSI = '$chassi' AND
                PLACA = '$placa'";
        $result = $conn->query($sql);
        $arrayOnibus[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            $arrayOnibus[$i] = $linha;
            $i++;
        }
        $msg = "sucesso";
        //echo json_encode($arrayOnibus, JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        $msg = $e->getMessage() . "Erro ao editar.<br>";
    } finally {
        echo $msg;
    }
       
}

?>