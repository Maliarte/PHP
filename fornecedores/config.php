<?php
$dbl = "mysql:dbname=3DAW;host=127.0.0.1";
$dbuser = "marilia";
$dbpass = "senha.123";
try {
 $pdo = new PDO($dbl, $dbuser, $dbpass);
} catch (PDOException $e) {
 echo "Falha na conexão<br>".$e->getMessage();
}
?>