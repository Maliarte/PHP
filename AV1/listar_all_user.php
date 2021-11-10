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
    <title>Listar todos Usuarios</title>
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
    <h1>Listar todos Usuario</h1>

    <table>
    	<tr>
		    
        	<th>Nome</th>
        	<th>Email</th>
       		<th>Idade</th>
        	
    	</tr>
<?php
	$i;
	
	$nome = array ("CUCU","CICI", "CECE");
	$email = array ("CUCU@gmail.com","CICI@gmail.com", "CECE@gmail.com");
	$idade = array ("12","43","26");
	
        /* Implementando Função */
        function listUser($i)  {

        /* Declaração de Variaveis Globais */
		global  $nome, $email, $idade;

		echo "<tr><td>$nome[$i]</td>";
		echo "<td>$email[$i]</td>";
        echo "<br>";
		echo "<td>$idade[$i]</td>";
        echo "<br></tr>";
			
	}
	for ($i=0; $i<count($nome); $i++){
		listUser($i);
        echo "<br>";		
	}	
?>		
</table>
</body>
</html>