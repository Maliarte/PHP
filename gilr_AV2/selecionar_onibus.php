<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    // $marca = $_GET['marca'];
    // $modelo = $_GET['modelo'];
    // $assentos = $_GET['assentos'];
    // $banheiro = $_GET['banheiro'];
    // $ar_condicionado = $_GET['ar_condicionado'];
    // $chassi = $_GET['chassi'];
    // $placa = $_GET['placa'];

    $sql = "SELECT * FROM ONIBUS WHERE ID = '$id'";
    $result = $conn->query($sql);
        
    $arrayOnibus[] = array();
    $i = 0;
    While ($linha = $result->fetch_assoc()){
        $arrayOnibus[$i] = $linha;
         $i++;
    }

    echo json_encode($arrayOnibus, JSON_UNESCAPED_UNICODE);
}

?>