<?php
/* Define a página atual pela URL */
$pagina = 'home';
                                                /*
                                                Ao entrar na página principal do seu navegador, sua página dinâmica carregará automaticamente o arquivo "home.php" 
                                                no centro da página, pois ele verificará se existe uma informação enviada pela URL: 
                                                */
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
                                                /*
                                                Ou seja, se existir um valor enviado a variável superglobal $_GET, 
                                                a variável $pagina recebe esse valor, senão ela carrega a página padrão: "home.php".
                                                */
 
/* Carrega o header.php */
include 'header.php';
 
/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'equipe':
        include 'equipe.php';
        break;
 
    default:
        include 'home.php';
        break;
}
 
/* Carrega o footer.php */
include 'footer.php';