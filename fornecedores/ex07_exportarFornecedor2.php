<!--
                Marília Silva | https://maliarte.com.br  
                
                * Apoie o projeto de educação tecnológica no Brasil 
                * deixe uma estrela e saiba mais no instagram @maliartemar!
-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exportar Fornecedores no DB</title>
    <h3>Exportar fornecedor</h3>
    <form action="ex07_exportarFornecedor2.php" method="POST">
        <input type="submit" name="op" value="Exportar">
        <br>
    </form>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "3daw2021";
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        //$conn é o nome da variavel que se chamará essa conexao
        if ($conn->connect_error) {
            die("Conexão com erro" . $conn->connect_error);
            //exibe mensagem de "conexao com erro" e concatena com o erro que virá no connect_error 
        }

        $sql = "SELECT * FROM `fornecedores`;";; //executa essa query
        $result = $conn->query($sql); //guarda a query na variavelresultado
        $nomearquivo = "Fornecedor.txt";
        $arq = fopen("Fornecedores.txt", "w");
        $txt = "nome;email;idade\n";
        while ($linha = $result->fetch_assoc()) //resultado do select é armazenado na variavel linha
        {

            fwrite($arq, $linha["codfornecedor"] . $linha["nomeFantasia"] . $linha["razaoSocial"] . $linha["cnpj"] . $linha["telefone1"] . $linha["telefone2"] . $linha["ultimaVenda"] . "\n");
        }
        fwrite($arq, $txt);
        fclose($arq);
    } else {
        $ehPost = false;
    }
    ?>
</body>

</html>