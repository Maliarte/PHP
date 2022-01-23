
<?php
    // recebendo requisição e retornando o render em HTML
    $nome = $_GET["aluno"];
    $email = $_GET["email"];
    $idade = $_GET["idade"]
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Title</title>
  </head>
  <body>
    <h1><?php echo "O nome é $nome"; ?></h1>
    <h2><?php echo "O email é $email"; ?></h2>
    <h3><?php echo "A idade é $idade"; ?></h3>
  </body>
</html>
