<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>3DAW</h1>
    <?php
                                //metodo get  pode escrever direto da url.
                                //  INSERIR NA URL O NOME ex: https://localhost/3daw/ex02_VariaveisRequest.php?nome=marilia.
                                // a partir '?' digo ao protocolo que estou enviando o par chave valor para o servidor. 

                $nome = $_GET["nome"];
                
                echo "nome vindo na url: $nome";
                echo "<br>";
                //concatenando "string" .$variavel
               
                echo " na url concatenado " .$nome;
                echo "<br>";
    ?>
</body>
</html>