<!-- 
            Estudo de acesso ao Banco de Dados com PHP e HTML
            para a disciplina de Aplicações Web da Faculdade 
            de Educação Tecnológica do Estado do Rio de Janeiro.

            Discente: Marília Silva. 
            Docente: André Neves.

Esse material foi produzido com muito carinho. Então se te ajudar, deixe uma estrelinha! </>

-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Leitura DB</title>
</head>

<body>
    <h3>CONEXÃO AO BD</h3>
    <!-- só irá acessar o banco 'no cabeçalho' depois que enviar o form -->
    <form action="ex05_listarFornecedor.php" method="post">
        <input type="submit" name="op" value="Listar Fornecedor">
        <br>
    </form>

    <?php
    
                                 /*                      SGBD
                                    Usuário do banco, usuario root existe no sistema 
                                    gerenciador de banco de dados, tem-se uma tabela

                                    o phpmyadmin é a penas uma interface amigável 
                                    para manipular as informações do banco de dados.
                                    O banco de dados é independente dessa interface, 
                                    podendo ser manipulado até via console, terminal.
                                                            
                                 */
        
        /* 
            if(método == POST -> estabeço a conexão, mostra submit)
            Else(GET -> exibe o formulario )
            /* Se o método for GET as linhas abaixo não serão executadas. apenas o form.
        */
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        
        {     
            //localização do sistema gerenciador de banco de dados:
            //o banco esta na mesma maquina do apache[estabele uma conexao]
            $servidor = "localhost"; //127.0.0.1
            $usuario = "root"; // usuario de acesso ao bd    
            $senha = ""; 
            $nomeBanco = "3daw2021"; //nome do bd

        //utilizando biblioteca php para se conectar com o banco
        //criando conexao mysqli, pdo...
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

        //se der erro fecha e exibe erro
        if ($conn->connect_error) {

            die("Conexão com erro " . $conn->connect_error);
            
        }

        //conexao deu certo, criei variavel sql com comando que faz leitura com o banco
        //seleciona todas colunas da tabela fornecedor todas colunas de todas as linhas

        //colocando select na variaveriavel $sql
        $sql = "SELECT * FROM `fornecedores` ";
                                                            /*result é um conjunto de linhas
                                                            usando a variavel criada de conexao com 
                                                            banco onde usamos uma funcao query() 
                                                            que executa o sql
              
        //listando fornecedores: executa query                                                   */
        $result = $conn->query($sql); 

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Cod</th><th>nome Fantasia</th><th>Razao social</th><th>cnpj</th><th>email</th><th>telefone</th>";
    
        //listando resultado da query com fetch, que pega linha por linha pelo array linha
        //com a chave [nome da coluna msqli]
        
        while ($linha = $result->fetch_assoc()) 
        //fetch_assoc() - retorna linha por linha |ocorrencia do array linha vindos do banco de dados
        {
            echo "<tr>";
            echo "<td> " . $linha["codFornecedor"] . "</td>"; 
            echo "<br>";
            echo "<td> " . $linha["nomeFantasia"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["razaoSocial"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["cnpj"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["email"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["telefone1"] . "</td>";
            echo "<br>";
            echo "<tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>