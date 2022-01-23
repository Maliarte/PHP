<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>3DAW</h1>
    <?php
    $nome1 = "Brenda";
    $nome2 = "Bruno";
    $nome3 = "Diego";
    $nome4 = "Eduardo";
    $nome5 = "Elias";
    $nomes = array("Brenda", "Bruno", "Diego", "Eduardo", "Elias");

    $email1 = "Brenda@faeterj-rio.edu.br";
    $email2 = "Bruno@faeterj-rio.edu.br";
    $email3 = "Diego@faeterj-rio.edu.br";
    $email4 = "Eduardo@faeterj-rio.edu.br";
    $email5 = "Elias@faeterj-rio.edu.br";
    $emails = array("Brenda@faeterj-rio.edu.br", "Bruno@faeterj-rio.edu.br", "Diego@faeterj-rio.edu.br", "Eduardo@faeterj-rio.edu.br", "Elias@faeterj-rio.edu.br");

    $media1 = 7.5;
    $media2 = 7.5;
    $media3 = 7.5;
    $media4 = 7.5;
    $media5 = 7.5;
    $medias = array(7.2, 7.3, 7.4, 7.5, 7.6);

    //echo "tipo de dado de nome1" . var_dump($nome1);
    echo "<br>";

    ?>
    <table style="border:1px solid black">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>media</th>
        </tr>
<!--               LOOPS
                REPETIÇAO
                
        
        <?php
        for ($x = 0; $x <= 4; $x++) 
        {
            echo "<tr>";
            echo "<td> $nomes[$x] </td>";
            echo "<td>$emails[$x] </td>";
            echo "<td>$medias[$x]</td>";
            echo "</tr>";
        }
        ?>
   
        $x = 0; 
        <?php
        while ($x <= 4) 
        {
            echo "<tr>";
            echo "<td> $nomes[$x] </td>";
            echo "<td>$emails[$x] </td>";
            echo "<td>$medias[$x]</td>";
            echo "</tr>";
            $x++;
        }
        ?>

    -->    
    <? php
    do 
    {
	    echo "<span>teste1 do while, x vale: " . $x . "</span><br>";
	    $x++;
	    echo "<span>teste1 do while, x vale: $x </span><br>";
    } while ($x < 5);
    ?>
    While ($x <= 4) {
            if ($nomes[$x] == "Diego") {
                $x++;
                continue;
            }
-------------------            if ($nomes[$x] == "Eduardo") {
                break;
            }
            echo "<tr>";
            echo "<td> $nomes[$x] </td>";
            echo "<td>$emails[$x] </td>";
            echo "<td>$medias[$x]</td>";
            echo "</tr>";
            $x++;
        }
    </table>
</body>

</html>