<?php

    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }   
 
   // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', 'antonio123*') or trigger_error(mysql_error());
 
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('seinenac') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL

  //mysql_select_db('acesso') or trigger_error(mysql_error());
    
  $usuario = mysql_real_escape_string($_POST['usuario']);
  $senha = mysql_real_escape_string($_POST['senha']);

// $sql = ;
  $query = mysql_query("SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '$usuario') AND (`senha` = '$senha') AND (`ativo` = 1) LIMIT 1");
  if (mysql_num_rows($query) != 1) 
  {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
	   // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    
      if ($_SESSION['UsuarioNivel']=='2'){
      header("Location: restrict.php");exit;
	  }
	  else{
		  header("Location: restrict2.php");exit;
	  }
  }
   
    
  ?>