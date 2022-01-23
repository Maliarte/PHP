<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodeDados = "sys_academico";
$conn = new mysqli($servidor, $usuario, $senha, $bancodeDados);
if ($conn->connect_error) {
    die("Conexao com o banco de dados falhou!!!");
}
//buscando todas colunas da tabela aluna, trazendo todos alunos
//$sql = "SELECT top 100* from  Alunos "; //limitando qnd de alunos trazidos


// linha 15 e 17 - consulta no BD
$sql = "SELECT * from  Alunos "; 
//limitando qnd de alunos trazidos executando


$result = $conn -> query($sql); 
//resultado: trecho da busca no BD

$arrayAlunos[]=array(); //kd ocorrencia array em 1 linha da tabekla

$i = 0; //indexador do array

//fetch -> pega um por vez, mas quando nao tem mais linha retorna false
while ($linha = $result->fetch_assoc()) {
            $arrAlunos[$i] = $linha;
           $i++;        
}           
            //gerando string-objeto json funcao flag: ignorar caractere especial, nao contar como caractere (Daí a importância da documentação de API, pra saber o retorno do JSon)
            echo json_encode($arrAlunos, JSON_UNESCAPED_UNICODE);

            /*
            $strJson = json_encode($arrAlunos, JSON_UNESCAPED_UNICODE);
            echo $strJson;
            */
    




            

            /*     --------- comentarios-----------------


            coloca o caractere segundo a tabela ASC 
            nao quero que considere codigo UNICODE

            https://www.php.net/manual/en/json.constants.php 
            https://www.php.net/json_encode
                                        encode json de kd linha utilizando json formater
                                                            OBJETO JSON
            [//arrAl
                {//comeco objt 1
                    par: "chave" "valor é com aspas quando é uma string. qnd inteiro vem sem"
                    "id":"4",
                    "nome":"jose da silva",
                    "email":"ze@gmail.com",
                    "cpf":"12345678910",
                    "matricula":"20212789456"
                }//final objt,
                { //comeco objt 2
                    "id":"5",
                    "nome":"antonio orleans e bragança",
                    "email":"tonho@gmail.com",
                    "cpf":"2316521561",
                    "matricula":"20212599595"
                },
                {
                    "id":"6",
                    "nome":"neusa",
                    "email":"neusa@gmail.com",
                    "cpf":"987465432122",
                    "matricula":"20212777999"
                }
]

*/



?>
            
 
 
 