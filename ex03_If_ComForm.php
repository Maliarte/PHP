<?php
$nome = $_POST["aluno"];
$email = $_POST["email"];
$idade = $_POST["idade"];
//echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Title</title></head><body>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1><?php echo "O nome é $nome"; ?></h1>
<h2><?php echo "O email é $email"; ?></h2>
<h3><?php echo "A idade é $idade"; ?></h3>
<form action="ex03_If_ComForm.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    email:   <input type="text" name="email"><br>
    idade:   <input type="text" name="idade"><br>
    <input type="submit" value="enviar">
</form>

<?php echo "</body></html>" ?>