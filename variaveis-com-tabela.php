<!-- 			/*
					para que eu possa executar determinadas tarefas no servidor, tal que nao da pra fazer via html
					por exemplo, trazer alguma informacao do banco de dados, enviando essa requisicao como resposta

					objeto json x banco de dados nosql (n relacional (orientado a objetos x orientados documentos) 

								URL___?(par: nome da chave e valor)

					var_dump() - tipo de dado 

					localhost == 127.0.0.1 (lookback)
				*/
-->


<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>


<!-- variaveis tabela

            <?php
				//ao criar uma variavel, pelo fato do PHP ser tipagem dinamica, a variavel assume o tipo sem ter que declarar.
                $nome1 = "Brenda";
                $nome2 = "Bruno";
                $nome3 = "Diego";
                $nome4 = "Eduardo";
                $nome5 = "Elias";
                $idade = 23;
                $media = 7.5;
                
				// funcao var_dump()

                echo "tipo de dado de nome1" . var_dump($nome1);
                echo "<br>";
                    echo "tipo de dado de nome1" . var_dump($nome2);
                    echo "<br>";
                    echo "tipo de dado de idade" . var_dump($idade);
                    echo "<br>";
                    echo "tipo de dado de media" . var_dump($media);
                    echo "<br>";
            ?>

            Variaveis Request
            <?php 

                $nome = $_GET["nome"];

                echo "nome vindo da URL: $nome";
                echo "<br>";

            ?>
-->

<!-- Variaveis Tabela exemplo 2-->
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

			$email1 = "Brenda@faeterj-rio.edu.br";
			$email2 = "Bruno@faeterj-rio.edu.br";
			$email3 = "Diego@faeterj-rio.edu.br";
			$email4 = "Eduardo@faeterj-rio.edu.br";
			$email5 = "Elias@faeterj-rio.edu.br";

			$media1 = 7.5;$media2 = 7.5;$media3 = 7.5;
			$media4 = 7.5;$media5 = 7.5;

			//echo "tipo de dado de nome1" . var_dump($nome1);
			echo "<br>";
    ?>

	<table style="border:5px solid pink" >   
		<tr>        
			<th>nome</th>        
			<th>email</th>        
			<th>media</th>    
		</tr>   
		<tr>        
			<td><?php echo $nome1 ?></td>        
			<td><?php echo $email1 ?></td>        
			<td><?php echo $media1 ?></td>    
			</tr>    
		<tr>        
			<td><?php echo $nome2 ?></td>        
			<td><?php echo $email2 ?></td>        
			<td><?php echo $media2 ?></td>    
			</tr>    <tr>        
			<td><?php echo $nome3 ?>
			</td>        

			<td><?php echo $email3 ?></td>        
			<td><?php echo $media3 ?></td>    </tr>    
		<tr>        
			<td><?php echo $nome4 ?></td>        
			<td><?php echo $email4 ?></td>       
			<td><?php echo $media4 ?></td>   
		</tr>    
		<tr>        
			<td><?php echo $nome5 ?></td>       
			<td><?php echo $email5 ?></td>        
			<td><?php echo $media5 ?></td>    
		</tr>

</table>


</body>
</html>




