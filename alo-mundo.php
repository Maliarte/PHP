<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alo</title>
</head>
<body>

        <h1>3DAW</h1>
        <?php
        echo "<h2>Exercicio 01</h2>";
        echo "Boa noite gente";
        
        
        $nome = "Marilia";
        if ($nome == $_GET["nome"]) {
            echo " é Marilia";
        } else {
            echo "o nome é: " . $nome;
        }
        ?>
</body>
</html>