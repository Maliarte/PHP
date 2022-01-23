<!-- 3DAW - Desenvolvimento de Aplicações Web
	
                    PHP - syntax
                    
    Marília Silva | https://maliarte.com.br  
    
    * Apoie o projeto de educação tecnológica no Brasil 
    * deixe uma estrela e saiba mais no instagram @maliartemar!
	
	Data: 29/09/2021
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <?php
    echo "<h1> P H P </h1>";
    echo "<h4> Operadores Aritmeticos </h4>";

    #soma
    echo "<h3> 5 + 5 = ";
    echo 5 + 5 ; //exibindo na tela o resultado

    #subtraçacao
    echo "<h3> 5 - 5 = ";
    echo 5 - 5 ;

    #multiplicacao
    echo "<h3> 5 * 5 = ";
    echo 5 * 5 ;

    #divisao
    echo "<h3> 5 / 5 = ";
    echo 5 / 5 ;

    #exponencial
    echo "<h3> 5 ^ 5 = ";
    echo 5 ** 5 ;

    echo "</h3><br> ------------------<br>";
    echo "<h4> Laços de Repetição <br></h4>";
    
                                                                #Laços de Repetição

    #while
    echo "while: <br>";
    $i = 0;
    while($i < 10) {
        echo $i;
        echo"<br>";
        $i++;
    }
    
    #do while
    echo "<br>do...while: <br>";
    $i = 0;
    do {
        echo $i;
        $i++;
        echo"<br>";
    } while ($i < 10); 
       
    
    
    #for
    echo "<br>for: <br>";
    
    for($i = 0; $i < 10;  $i++) {
        echo $i;
        echo"<br>";
    }
    #foreach
    echo "<br>foreach: <br>";
    $i = [0,1,2,3,4,5,6,7,8,9];
    foreach ($i as $j) {
        echo $j;
        echo"<br>";
    }
    ?>


</body>
</html>