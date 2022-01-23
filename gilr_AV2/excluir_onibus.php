<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $sql = "DELETE FROM ONIBUS WHERE ID = '$id'";
    $result = $conn->query($sql);
    $sql = "SELECT * FROM ONIBUS WHERE ID = '$id'";
    try {
      $result = $conn->query($sql);
      echo "sucesso";
    } catch (Exception $e) {
      echo "Erro na edição<br>";
      $e->getMessage();
    }
      
}

?>