<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["aluno"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
} else {
    $ehPost = false;
}

//echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Title</title></head><body>";
?>
<h1><?php if ($ehPost) {echo "O nome é $nome";} ?></h1>
<h2><?php if ($ehPost) {echo "O email é $email";} ?></h2>
<h3><?php if ($ehPost) {echo "A idade é $idade";} ?></h3>
<form action="ex03_If_ComForm.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    email:   <input type="text" name="email"><br>
    idade:   <input type="text" name="idade"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>