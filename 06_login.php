<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuario </title>
</head>
<body>
    <form  method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

         <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>

    </form>

    <?php
      //Verifica se o formulario foi enviado 
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebe os valores enviados 
        $nome = $_POST['nome'];
        $senha = $_GET['senha'];
      
        
        //abrir o arquivo usuario.txt para leitura 
        $arquivo = fopen('usuarios.txt', 'r');
        $login_sucesso = false;
        
        //echo "passou aqui"; // feito para ver o erro 
        //Ler cada linha do arquivo 
        while (($linha = fgets($arquivo)) !== false ) {
            //
            list ($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

            //
            if ($nome == $usuario_arquivo && $senha == $senha_arquivo) { 
                $login_sucesso = true; 
                break; // Interromper o laço. usuario localiza o arquivo 
            
               } 
        }

        //fecha o arquivo 
        fclose($arquivo);

        //Exibir a mensagem (feedback de sucesso OU erro )
        if ($login_sucesso){
            echo "<p> Login realizado com o sucesso! Bem-vindo, $nome!</p>";
        } else {
            echo "<p style= 'color: red'> Usuario ou senha incorretos.</p>";
        }
      }
    ?>
</body>
</html>