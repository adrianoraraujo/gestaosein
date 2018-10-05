<?php
 // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<img src="brasao_pb1.gif" alt="Brasão das Armas" title="Brasão das Armas" />
<meta charset="UTF-8">
    <title>Login Gestão SEIN</title>
     <!-- chama o arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
   <nav>
  <ul class="menu">
        <li><a href="index.php">Login</a></li>
        <li><a href="logout.php">Sair</a></li> 
		<li><a href="#">Help</a></li>
</ul>
</nav>
</head>
<body>
<br><br\>
<br><br\>
<br><br\>
<h1> Bem Vindo ao Gestão SEIN</h1>
<form action="validacao.php" method="post">
  <fieldset>
    <div>
        <label for="txUsuario">login:</label>
        <input type="text" name="usuario" id="txUsuario" maxlength="25" />
    </div>
	<div>
        <label for="txSenha">Senha</label>
      <input type="password" name="senha" id="txSenha" />
    </div>
	<div class="button">
        <button type="submit">Entrar</button><button type="submit">Esqueci a senha</button>
    </div>
	</fieldset>
</form>

</body>
</html>
