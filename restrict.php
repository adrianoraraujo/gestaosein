
<!DOCTYPE HTML>
<html lang="pt-br">
<head>

<?php
  include 'header.php';
  ?>
<!-- <link rel="stylesheet" type="text/css"  href="estilo.css" /> -->
  
</head>
<body>
<br><br\>
<br><br\>
<br><br\>
<h1> Bem Vindo ao Gestão SEIN</h1>
</body>
</html>
<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
  $nivel_necessario = 2;
    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: restrict2.php"); exit;
  }
    
  ?>

    
  <h1>Página restrita</h1>
  <p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

</body>
</html>