<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com Valores Lógicos e Tipos de dados</title>

        <!-- Esse código foi desenvolvido por MEID | Maliarte Edunimento Integrativo Digital -> dê uma estrelinha se foi útil! 
        insta @barbarostecnologicos. || @MALIARTEMAR
        -->
</head>
<body>

  <h3> DIFERENÇA  <br> == (Operador lógico) <br> === (compara tipo de Dados) </h3>

    <!--
      ex1
    -->

    <?php  
            //declaração de variaveis
           // $nome = $_GET["nome"]; //recebendo através da URL 
            $idade = '26';

            ///if ($nome == 'Marilia'){
           //     echo 'verdadeiro';
           // } else {
           //     echo 'falso';
          //      echo '<br>';
           // }
            
            //comparando string com tipo inteiro, retornara falso
            if ($idade === '26'){
                echo 'verdadeiro';
                echo '<br>';
            } else {
                echo 'falso';
                echo '<br>';
            }
            
            //laço repetição

                        //for

                        //    for($i=0; $i<10; $i++) {
                        //        echo '<br>';
                        //        echo $i;
                        //        echo "<hr>";
                        //    }

                        //while

                        $i = 0;

                        while($i <= 10) {
                            echo $i;
                            echo "<br>";
                            
                            $i++;
                        }

    ?>

</body>
</html>