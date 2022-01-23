<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>3DAW</h1>
    <table style="border:1px solid black">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>media</th>
        </tr>
    <?php
        $nomes = array("Brenda", "Bruno", "Diego", "Eduardo", "Elias");
        $emails = array("Brenda@faeterj-rio.edu.br", "Bruno@faeterjrio.edu.br", "Diego@faeterj-rio.edu.br", "Eduardo@faeterj-rio.edu.br","Elias@faeterj-rio.edu.br");
        $medias = array(7.62, 7.31, 7.46, 7.51, 7.66);
    
        echo "<br>";
    
        //criando variavel x para percorrer array (que varia de 0 à 4) sendo incrementada em uma unidade.
        for ($x = 0; $x <= 4; $x++) {
            echo "<tr>";
            echo "<td>$nomes[$x] </td>";
            echo "<td>$emails[$x] </td>";
            echo "<td>$medias[$x]</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>