<?php
$name = $_GET["aluno"];
$email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisição por formulario</title>
</head>
<body>
    <h1> <?php echo "o nome é  $name"; ?> </h1>
    <h1> <?php echo "o email é $email"; ?> </h1>
   
</body>
</html>