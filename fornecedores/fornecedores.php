<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initialscale=1.0" />
    <title>Fornecedores</title>
  </head>

  <body id="fornecedor">
    <div id="content">
      <h1>Fornecedores</h1>
      <a href="AdicionarFornecedor.php">
        <button class="button add">Adicionar</button>
      </a>
      <table>
        <tr>
          <th>Nome Fantasia</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Ação</th>
        </tr>
        <?php
            require "ListaFornecedor.php"

                        /*  
                                            NOTAS
                        a função require() importa arquivos. 
                        porém, caso o mesmo não seja encontrado, 
                        será levantado uma exceção e a execução é finalizada
                        Essa é uma maneira de interrompermos a execução dos scripts caso 
                        alguma anomalia ocorra.
                        */
        
        ?>
      </table>
    </div>
  </body>
</html>
