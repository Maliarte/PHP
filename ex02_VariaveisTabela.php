<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <h1>Variaveis Tabela </h1>
    
    <?php
        $nome1 = "Brenda";
        $nome2 = "Bruno";
        $nome3 = "Diego";
        $nome4 = "Eduardo";
        $nome5 = "Elias";

        $email1 = "Brenda@faeterj-rio.edu.br";
        $email2 = "Bruno@faeterj-rio.edu.br";
        $email3 = "Diego@faeterj-rio.edu.br";
        $email4 = "Eduardo@faeterj-rio.edu.br";
        $email5 = "Elias@faeterj-rio.edu.br";

        $media1 = 7.5;
        $media2 = 7.5;
        $media3 = 7.5;
        $media4 = 7.5;
        $media5 = 7.5;

            //echo "tipo de dado de nome1" . var_dump($nome1);
        echo "<br>";
    ?>
        <table style="border:1px solid black" >
        <thead>
            <tr>
                <th>nome</th>
                <th>email</th>
                <th>media</th>
            </tr>
        </thead>
                                            <!--  echo v.1 -->
            <tr>
                <td><?php echo $nome1 ?></td>
                <td><?php echo $email1 ?></td>
                <td><?php echo $media1 ?></td>
             </tr>
            <tr>
                <td><?php echo $nome2 ?></td>
                <td><?php echo $email2 ?></td>
                <td><?php echo $media2 ?></td>
            </tr>
        <tr>
                <td><?php echo $nome3 ?></td>
                <td><?php echo $email3 ?></td>
                <td><?php echo $media3 ?></td>
        </tr>
                                            <!-- echo v.3 -->
        <tr>
            <?php
                echo "<td>$nome4</td><td>$email4</td><td>$media4</td>"; 
            ?>
        </tr>
        <tr>
                                            <!-- echo v.2 -->
        <?php
            echo "<td> $nome5 </td>";
            echo "<td> $email5 </td>";
            echo "<td> $media5 </td>";
        ?>
        </tr>
</table>
</body>
</html>