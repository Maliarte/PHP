<?php

$nome  = $_GET["nome"];
$cpf   = $_GET["cpf"];
$pCred = $_GET["consignado"];
$pSPC  = $_GET["consolidado"];
$pRenda = $_GET["spcform"]; 
$pParcelas = $_GET["currency-field"];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "sys_fintech";

$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
if ($conn->connect_error) {
    die("Conexao com o banco de dados falhou!!!");
}

$sql = "INSERT INTO `EMPRESTIMO` (`nome`,  `cpf`,`` ) VALUES ('$nome','$cpf')";

$result = $conn->query($sql);
// if ($conn->query($sql) === TRUE) {
$sucesso = true;
$sql = "SELECT * FROM  ? where cpf='$cpf' ";
$result = $conn -> query($sql);

?>