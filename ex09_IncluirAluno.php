<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$cpf = $_GET["cpf"];
$matricula = $_GET["matricula"];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "sys_academico";
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
if ($conn->connect_error) {
    die("Conexao com o banco de dados falhou!!!");
}

$sql = "Insert into Alunos(`nome`, `email`, `cpf`, `matricula`) VALUES ('$nome','$email','$cpf','$matricula')";
$result = $conn->query($sql);
// if ($conn->query($sql) === TRUE) {
$sucesso = true;
$sql = "SELECT * from  Alunos where cpf='$cpf' ";
$result = $conn -> query($sql);

//trabalhar com json_encode: pegar um array e serializar
//retornar ao front objeto criado


//$aluno = array($nome, $email, $cpf, $matricula);
$jAluno = json_encode($result);
echo $jAluno;



?>

