<?php
$servidor = "localhost";
$usuario = "marilia";
$senha = "baiano";
$bancodeDados = "3DAW";
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
if ($conn->connect_error) {
    die("Conexao falhou!!!");
}
?>