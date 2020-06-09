<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//include "../../verifica_login.php";

    $sql = "UPDATE tab_colaborador SET Col_Nome = '".$_POST['nome']."', Col_Telefone = '".$_POST['telefone']."', Col_Empresa = '".$_POST['empresa']."', Col_Setor = '".$_POST['setor']."', Col_Email = '".$_POST['email']."', Col_Cargo = '".$_POST['cargo']."' WHERE Id_Colaborador = '".$_POST['cod']."'";
  // $result = mysqli_query($conn, $sql);

   if ($conn->query($sql) === TRUE) {
    echo "<script>   alert('Alteração realizada com sucesso!'); location = '../../index.php?p=cad'; </script>";
 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
?>


