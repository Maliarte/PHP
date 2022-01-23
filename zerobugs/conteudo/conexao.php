<?php
/*      ========= === = M E I D = === =========

        Esse projeto e suas notas foram desenvolvidos por    \/
                                                                
                                                              ui | ui         |||
                     < PERSORNALIZE A ESCRITA DA MARCA  >   Marília Silva.     < 
                                                              UX | UI         |||

                            Conheça nosso trabalho!     |     ^               |||

            [x]interagindo com a interface;
            [x]comentando e sendo destaque;
            [o]     contato@maliarte.com.br || @barbarostecnologicos
            __________________________________ @maliartemar
        
  Projeto em PHP: conectar site PHP ao BD MYSQL com mysqli [TUTORONA]
*/
$host="localhost";
$usuario="root";
$senha="";
$bancodeDados = "zerobugs";

//variavel que armazena conexao com o banco, sera reaproveitada toda vez que quiser
//extrair informacao do BD
$mysqli = new mysqli($host, $usuario, $senha, $bancodeDados);

//verifica erro na conexao ao bd se houver retorna o num do erro, do contrario retorna falso
if($mysqli ->connect_errno)
    echo "Falha na conecao: (".$mysqli -> connect_errno.") ".$mysqli->connect_error;
?>