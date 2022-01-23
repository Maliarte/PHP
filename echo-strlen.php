<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> teste strlen </h1>
<?php
    //função strlen: retorna comprimento da string
    $txt = "Hello World!";
    echo(" A variável 'Hello World!' possui ");
    echo "<br>";
    echo strlen("$txt");
    echo ("\ncaracteres\n");

    echo "\n tipo de dado de txt" . var_dump($txt);

?>
    
</body>
</html>