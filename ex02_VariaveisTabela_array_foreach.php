<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <h1>teste loop foreach</h1>
    <?php

            $nomes = array("Brenda", "Bruno", "Diego", "Eduardo", "Elias");
            echo "<br>";
    ?>
    <table>
        <tr>
            <th>NOME</th>
        </tr>

            <?php
                        
                        /* 
                            O foreach faz um loop em um bloco de código para cada elemento em uma matriz. 
                            Ou seja percorre elementos de um vetor.

                            syntax
                                foreach ($array as $value) 
                                {
                                    code to be executed;
                                }
                                    Para cada iteração de loop, o valor do elemento atual do array 
                                    é atribuído a $ value e o ponteiro do array é movido por um, 
                                    até atingir o último elemento do array.
                                    
                        */
                        //$x = 0;
                        foreach($nomes as $nome) 
                        {
                            echo"<tr>";
                            echo "<td> $nome <br></td>";
                            echo "</tr>";
                           
                        }
            ?>
    </table>
    </body>
</html>