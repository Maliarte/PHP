<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $nome = $_GET['name'];
    $cpf = $_GET['cpf'];
    $credito = $_GET['?'];
    $serasa = $_GET['?'];
    $renda = $_GET['currency-field'];
   
}
$maxid = "SELECT MAX(ID) FROM ?;";
$max = $conn->query($maxid);

$sql = "INSERT INTO ? (NOME, CPF, CREDITO, SPC, RENDA, PARCELAS) VALUES ('$name', '$cpf', '$credito', '$serasa', '$renda');";

$result = $conn->query($sql);



?>