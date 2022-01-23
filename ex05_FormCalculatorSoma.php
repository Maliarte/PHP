<?php

/* recebendo dados que vem por método GET e colocando em duas variáveis
GET: é um array, logo inserir nome dos dados

fazer html para devolver o valor para quem fez a requisicao
*/
    $var1 = $_GET["var1"];
    $var2 = $_GET["var2"];
    /*  
    
    $resultado = $var1 + $var2;

        no html linha 24 
        <input type="number" name="resultado" value = <?php echo $resultado ?> /><br/><br/>
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h3>Soma</h3>
      <input type="number" name="var1" value = <?php echo $var1 ?> /> +
      <input type="number" name="var2" value = <?php echo $var2 ?>/> =
      <input type="number" name="resultado" value = <?php echo $var1 + $var2 ?> /><br/><br/>
      <input type="submit" value="Calcular" />
    </form>
</head>
<body>
    
</body>
</html>