<?php 
    //zerando variavel
    $isPost = 0;
    $var1 = 0;
    $var2 = 0;
    $resultado = 0;
    /* validando metodo da requisicao*/  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_POST["var1"];
        $var2 = $_POST["var2"];
        $resultado = $var1 + $var2;
        
        //criando booleano
        $_isPost = 1;
    }
?>
<!DOCTYPE html>
<!-- 
    
    Enviando requisicao ao servidor pelo metodo post, isto é, chegando o formulario no corpo da requição

    Ao enves de dois arquivos quero ter um so, para isso transformo o forms em POST
    
    -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora POST</title>
  </head>
  <body>
  <form action="ex05_CalculaForm.php" method="POST">
  <h3>Soma</h3>
    <h1>Calculadora</h1>
    <!-- Criando um booleano se o post for igual a 1 -->
    <?php 
        if ($isPost = 1 ) {
            echo "<input type='number' name='var1' value = '$var1' > + ";
            echo "<input type='number' name='var2' value =  '$var2' > = ";
            echo "<input type='number' name='resultado' value = '$resultado' >";
        } else {
            echo "<input type= 'number' name='var1'> +";
            echo "<input type= 'number' name='var2' > = ";
            echo "<input type= 'number' name='resultado' > ";
        }
    ?>
    <br><br>
    <input type="submit" value="Calcular">
    </form>
  </body>
</html>
