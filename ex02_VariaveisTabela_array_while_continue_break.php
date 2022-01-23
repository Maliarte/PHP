<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <h1>3DAW</h1>
        <?php

            $nomes = array("Brenda", "Bruno", "Diego", "Eduardo", "Elias");

            $emails = array("Brenda@faeterj-rio.edu.br", "Bruno@faeterjrio.edu.br", "Diego@faeterj-rio.edu.br", "Eduardo@faeterj-rio.edu.br",
            "Elias@faeterj-rio.edu.br");


            $medias = array(7.62, 7.31, 7.46, 7.51, 7.66);

            //echo "tipo de dado de nome1" . var_dump($nome1);

        echo "<br>";
        ?>

        <table style="border:1px solid black">
           
            <?php
                    $x = 0;
                    while ( $x <= 4) {
                        if($nomes[$x] == "Diego") {
                            $x++;
                            continue; // 'continue' itera a função while, o code abaixo não é executado.
                        }
                        if ($nomes[$x] == "Eduardo") {
                            break;
                        }
                            echo "<tr>";
                           // echo "<td> $nomes[$x] </td>";
                           // echo "<td>$emails[$x] </td>";
                           // echo "<td>$medias[$x]</td>";
                           // echo "</tr>";
                        $x++;
                    }
            ?>
        </table>
    </body>
</html>