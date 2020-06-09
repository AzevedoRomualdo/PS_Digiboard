<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//include "../../verifica_login.php";

    $sql = "INSERT INTO tab_colaborador (Col_Nome, Col_Telefone, Col_Empresa, Col_Setor, Col_Email, Col_Cargo) values ('".$_POST['nome']."', '".$_POST['telefone']."', '".$_POST['empresa']."', '".$_POST['setor']."', '".$_POST['email']."', '".$_POST['cargo']."')";
  // $result = mysqli_query($conn, $sql);

   if ($conn->query($sql) === TRUE) {
    echo "<script>   alert('Colaborador cadastrado com sucesso!'); location = '../../index.php?p=cad'; </script>";
   // header('location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
//echo "<script> alert( 'Cadastrado realizado com sucesso!' ); location = '../../index.php?p=alun'; </script>";
?>