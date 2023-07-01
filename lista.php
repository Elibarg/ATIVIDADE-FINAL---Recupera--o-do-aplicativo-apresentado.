<?php
    include("conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="lista.css" type="text/css">
</head>
<body>
    <span>Lista</span>
    <form  action="" method="post">
        <button name="listar" style="margin-top:20px"><img src="lista.png" width="20px"></button>
    </form>
    <div class="listado">
        <?php
            if(isset($_POST["listar"]))
            {
                $comando = $pdo->prepare("SELECT nome, email, telefone FROM cadastro");
                $resultado = $comando->execute();
            
                while($linhas = $comando->fetch())
                {
                    $nome = $linhas["nome"];
                    $email = $linhas["email"];
                    $telefone = $linhas["telefone"];
                    echo("Nome: $nome E-mail: $email Telefone: $telefone <br>");
                }
            }
        ?>        
    </div>
    <a href="index.html" class="botao_cadastro"><img src="proximo.png" width="50px"></a> 
        
</body>
</html>