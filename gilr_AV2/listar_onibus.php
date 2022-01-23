<?php
require "config.php";

$sql = "SELECT * FROM ONIBUS";
$result = $conn->query($sql);

$arrayOnibus[] = array();
$i = 0;
While ($linha = $result->fetch_assoc()){
    $arrayOnibus[$i] = $linha;
     $i++;
}
echo json_encode($arrayOnibus, JSON_UNESCAPED_UNICODE);
?>