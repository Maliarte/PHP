<!-- 
                        TRABALHO DE AULA -> como conectar a listagem ao arquivo usuarios.php? 
                        
                                |dúvida postuma|

                        Docente: André Neves
                        Discente: Marília Silva

                
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar um Usuario</title>
    <style>

        table {
            width: 100%;
            border: 1px solid #000;
            margin: 20px auto;
        }

        th {
            background-color: #edf5fa;
        }

        td {
            padding: 2px 5px;
            text-align: center;
            font-size: small;
        }
        h1 {
            text-align: center;
        }
        </style>
</head>
<body>


    <h1>Jogos Mr. Falls </h1>
    <hr>
    <h1>Listar um Usuario</h1>

    <table>
    	<tr>
		    
        	<th>Nome</th>
        	<th>Email</th>
       		<th>Idade</th>
        	
    	</tr>
<?php
	$i;
	
	$nome = "CACA";
	$email = "CACA@gmail.com";
	$idade = "43";
	
        /* Declaração de Variaveis Globais */
		global $nome, $email, $idade;

		echo "<td>$nome</td><br>";
		echo "<td>$email</td><br>";
		echo "<td>$idade</td><br>";				
	
?>		
</table>
</body>
</html>