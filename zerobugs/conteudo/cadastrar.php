<?php 
    include("conexao.php");

    if(isset($_POST['confirmar']))
    {
        //     1 - registro dos dados

                /* Registra-se dados em um section para que possa recupera-los,
                ou seja, uma vez que o user entra os dados sao retidos
                p serem reutilizados
                */

        //usuario  on: se a sessao n existe faça
        if(!isset($_SESSION))
            session_start();

        foreach($_POST as $chave => $valor)
            $_SESSION[$chave] = $mysqli -> real_escape_string($valor);


        //2 - validacao dos dados

         /* validando nome e sobrenome */
        if(strlen($__SESSION['nome'])==0)
            $erro[]="Preencha o nome corretamente.";
        
        if(strlen($__SESSION['sobrenome'])==0)
        $erro[]="Preencha o sobrenome corretamente.";

        /* validando email */
        if(substr_count($_SESSION['email'], '@') != 1 || substr_count($_SESSION['email'],'.') < 1 || substr_count($_SESSION['email'],'.') > 2)
        $erro[]="Preencha o e-mail corretamente.";

         /* validando nivel de acesso verificar se ele n eh nulo */
         if(strlen($__SESSION['nivel_de_acesso']) == 0)
         $erro[]="Preencha o nivel de acesso.";

        /* validando senha */
         if(strlen($__SESSION['senha']) < 8 || strlen($__SESSION['senha']) > 16 )
         $erro[]="Preencha a senha.";

          /* validando repita senha */
          if(strcmp($_SESSION['senha'], $_SESSION['rsenha']) != 0)
          $erro[]="Digite as senhas corretamente.";
 

        // 3 - Insercao no Banco e redirecionamento

        if(count($erro) == 0) {

        $sql_code = "INSERT INTO usuario (
        nome,
        sobrenome, 
        email,
        senha,
        sexo, 
        nivel_de_acesso, 
        data_de_cadastro)
        VALUES(
            '$_SESSION[nome]',
            '$_SESSION[sobrenome]',
            '$_SESSION[email]',
            '$_SESSION[senha]',
            '$_SESSION[sexo]',
            '$_SESSION[nivel_de_acesso]',
            NOW()
        )";

        $confirma = $mysqli->query($sql_code) or die ($mysqli -> error);

        //verificar sucesso da entrada dos dados
        if($confirma) {
            //deletando variaveis
            unset($_SESSION[$nome],
            $_SESSION[$sobrenome],
            $_SESSION[$email],
            $_SESSION[$senha],
            $_SESSION[$sexo],
            $_SESSION[$nivel_de_acesso],
            $_SESSION[$data_de_cadastro]); 
                
            echo "<script> location.href='index.php?p=inicial'; </script>";
        } //confirma nao foi positivo vms mostrar erro para usuario
        else
        $erro[]=$confirma;    
    }
}
    
?>


<h1>Cadastrar Usuário</h1>
<!--        
                CONTAGEM ERRO
            com esse script php, para cada erro que existir, exibi-o 
-->
<?php 
    if(count($erro) > 0){ 
        echo "<div class='erro'>";  
        foreach ($erro as $valor)
        echo "$valor <br>"; 
        echo "</div>";
    }
?>

    <a href="index.php?=cadastrar">Voltar</a>

    <form action="index.php?p=inicial" method="POST">
   
                <label for="">Nome </label>
                <input name="nome" value="" required type="text">
                <p class=espaco> </p>

                <label for=""> Sobrenome</label>
                <input name="sobrenome" value="" required type="text">
                <p class=espaco> </p>

                <label for=""> Email</label>
                <input name="email" value="" required type="email">
                <p class=espaco> </p>

                <label for="">Sexo </label>
                <select name="sexo">
                    <option value="">Selecione</option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                </select>
                <p class=espaco> </p>

                <label for=""> Senha </label>
                <input name="senha" value="" placeholder="entre 8 e 16 caracteres" required type="password">
                <p class=espaco> </p>

                <label for=""> Repita Senha</label>
                <input name="rsenha" value="" required type="password">
                <p class="espaco"> </p>

                <label for="nivel_de_acesso">Nivel de Acesso </label>
                <select name="nivel_de_acesso">
                    <option value="">Selecione</option>
                    <option value="1">Basico</option>
                    <option value="2">Admin</option>
                </select>
                <p class=espaco> </p>


                <input value="salvar" name="confirmar" type="submit">

</form>