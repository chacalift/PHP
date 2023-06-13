<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<body class="imagem">
	    <div class="caixa">
        <h1 class="titulo">Cadastro realizado com Sucesso</h1>
        <?php
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $senha_cripto = base64_encode($senha);
            $senha_vetor = [$senha_cripto, $senha];
            echo  "Nome: ".$nome;
            echo '<br/>';
            echo  "Login: ".$login;
            echo '<br/>';
            echo  "Senha: ".$senha_cripto;
            echo '<br/>';
        ?>
        <br/>
        
	</div>
</body>
</html>
