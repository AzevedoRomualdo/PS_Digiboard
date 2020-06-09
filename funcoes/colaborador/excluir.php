<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = "DELETE FROM tab_colaborador WHERE Id_Colaborador = '".$_POST['cod']."'";

if ($conn->query($sql) === TRUE) {
    echo "<script>   alert('Colaborador excluído com sucesso!'); location = '../../index.php?p=cad'; </script>";
   // header('location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>