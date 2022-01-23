<?php
$servidor = "127.0.0.1";
$usuario = "gilmar";
$senha = "senha.123";
$bancodeDados = "3DAW";
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
if ($conn->connect_error) {
    die("Conexao com o banco de dados falhou!!!");
}