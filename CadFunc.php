
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<?php
  include 'header2.php';
  ?>
</head>
<body>
<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    

    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])){
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: index.php"); exit;
  }
    
  ?>
  <h1>Página restrita</h1>
  <p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
  <br><br\>
<br><br\>
<br><br\>
<h1>Cadastro de Funcionário SEIN</h1>
<?
#estabelecemos conexão com o banco de dados
  mysql_connect('localhost', 'root', 'antonio123*') or trigger_error(mysql_error());


#seleciona o banco de dados
  mysql_select_db('seinenac') or trigger_error(mysql_error());

 #verifica se existe registros no banco
 $query = mysql_query("SELECT sigla, descricao FROM estados");
$query2 = mysql_query("SELECT id, nome FROM subnucleo");

 #se não existir registros então insere os valores abaixo
 

?>


<form name="produto" method="post" action="">
 
</form>



<form action="DAO.php" method="post">
    <div><h2>Dados Pessoais</h2>
<br><br\></div>
<div>
        <label for="name">Nome:</label>
        <input type="text" id="name" />
    </div>
	<div>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" />
    </div>
	<div>
        <label for="rg">RG:</label>
        <input type="text" id="rg" />
    </div>
    <div>
        <label for="orgaoexp">Orgão expedidor:</label>
        <input type="text" id="orgaoexp" />
    </div>
    <div>
        <label for="email1">E-mail:</label>
        <input type="email" id="email1" />
    </div>
	<div>
        <label for="telef">Tel. :</label>
        <input type="text" id="telef" />
    </div>
	<div>
        <label for="celular">Cel. :</label>
        <input type="text" id="celular" />
    </div>
	
<h2>Endereço</h2>
<br><br\>


    <div>
        <label for="rua">Rua:</label>
        <input type="text" id="rua" />
    </div>
	<div>
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" />
    </div>
	<div>
        <label for="uf" id="uf">Estado</label>
 <select>
 <option></option>
 
 <?php while($Uf = mysql_fetch_array($query)) { ?>
 <option value="<?php echo $Uf['sigla'] ?>"><?php echo $Uf['descricao'] ?></option>
 <?php } ?>
 
 </select>
    </div>
    <div>
        <label for="comp">Complemento:</label>
        <input type="text" id="comp" />
    </div>
    
   
<h2>Dados Funcionais</h2>

<br><br\>

    <div>
        <label for="siape">SIAPE:</label>
        <input type="text" id="siape" />
    </div>
	<?php
	 
	?>
	<div>
        <label for="subn" id="subn">Subnúcleo</label>
 <select>
 <option></option>
 
 <?php while($subn = mysql_fetch_array($query2)) { ?>
 <option value="<?php echo $subn['id'] ?>"><?php echo $subn['nome'] ?></option>
 <?php } ?>
 
 </select>
        
    </div>
	<div>
        <label for="list">Cargo:</label>
         <input type="list" list="cargo">
  <datalist id="cargo">
    <option value="Servidor">
    <option value="Procurador">
    </datalist>
    </div>
    <div>
        <label for="list">Função:</label>
         <input type="list" list="nivel">
  <datalist id="nivel">
    <option value="Gestor">
    <option value="Comum">
    </datalist>
    </div>
	<div>
        <label for="pgf">PGF:</label>
        <input type="text" id="pgf" />
    </div>
    <div>
        <label for="email2">E-mail:</label>
        <input type="email" id="email2" />
    </div>
	<div>
        <label for="telef">Ramal:</label>
        <input type="text" id="telef" />
    </div>
    
<h2>Sistemas</h2>

<br><br\>

    <div>
        <label for="list">Sistema 1:</label>
         <input type="list" list="browsers">
  <datalist id="browsers">
    <option value="Sicafi">
    <option value="INMETRO">
    <option value="CNIS">
    <option value="Infoseg">
    <option value="Sigec Anatel">
  </datalist>
    </div>
	<div>
        <label for="list">Sistema 2:</label>
         <input type="list" list="browsers">
  <datalist id="browsers">
    <option value="Sicafi">
    <option value="INMETRO">
    <option value="CNIS">
    <option value="Infoseg">
    <option value="Sigec Anatel">
  </datalist>
    </div>
	<div>
        <label for="list">Sistema 3:</label>
         <input type="list" list="browsers">
  <datalist id="browsers">
    <option value="Sicafi">
    <option value="INMETRO">
    <option value="CNIS">
    <option value="Infoseg">
    <option value="Sigec Anatel">
  </datalist>
    </div>
    <div>
        <label for="list">Sistema 4:</label>
         <input type="list" list="browsers">
  <datalist id="browsers">
    <option value="Sicafi">
    <option value="INMETRO">
    <option value="CNIS">
    <option value="Infoseg">
    <option value="Sigec Anatel">
  </datalist>
    </div>
	<div>
        <label for="list">Sistema 5:</label>
         <input type="list" list="browsers">
  <datalist id="browsers">
    <option value="Sicafi">
    <option value="INMETRO">
    <option value="CNIS">
    <option value="Infoseg">
    <option value="Sigec Anatel">
  </datalist>
    </div>
    <div class="button">
        <button type="submit">Salvar</button>
    </div>
</form>
</body>
</html>
