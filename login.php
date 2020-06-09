<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>PS_Digiboard</title>
     <link rel="stylesheet" href="_css/style.css">
</head>

<body>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


<form   method="post"  action="login.php" >
  <h4> Login </h4>
  <input class="name" name="nome" id="login" type="text" placeholder="Nome do usuário" required="" oninvalid="setCustomValidity('Por favor, digite seu nome de usuário.')" onchange="try{setCustomValidity('');}catch(e){}"/>
  <input class="pw" type="password" name="senha" id="senha" placeholder="Sua senha" required="" oninvalid="setCustomValidity('Por favor, digite aqui sua senha.')" onchange="try{setCustomValidity('');}catch(e){}"/>
  
  <input type="hidden" name="acao" value="comentar"/>
  <input type="submit" value="Entrar" class="button"/>

</form>
  
  <footer id="rodape">
          <p>Copyright &copy; 2017         
          </p>
  </footer>
  
</body>
</html>


<?php
if(isset($_POST['acao']) && $_POST['acao'] == 'comentar'){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

	$sql = "SELECT * FROM tab_usuario WHERE Usu_Email = '".$_POST['nome']."' AND Usu_Senha = '".$_POST['senha']."'";
	$result = mysqli_query($conn, $sql);

	
	$ln = mysqli_fetch_array($result);
	
	if(mysqli_num_rows($result) > 0){

     // $_SESSION['Id_Usuario'] = $ln['Id_Usuario'];
      $_SESSION['Usu_Nome'] = $ln['Usu_Nome'];
      $_SESSION['Usu_Senha'] = $ln['Usu_Senha'];
      
		echo '<script> alert("Usuário ou senha VÁLIDOS")</script>';
		header('location:index.php');
		
		
	}else{
	echo '<script> alert("Usuário ou senha inválidos")</script>';
	}
}
?>
