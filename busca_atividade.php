<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bd_digiboard";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//include "../../verifica_login.php";
	
    $pesquisa = mysqli_real_escape_string($conn, $_POST['palavra']);
	
	$sql = "SELECT * FROM tab_colaborador WHERE Col_Nome LIKE '%$pesquisa%'";
	$result = mysqli_query($conn, $sql);

	
	
	if(mysqli_num_rows($result) <= 0){
		echo 'Atividade não encontrado';
	}else{ ?>
<table style="border-spacing: 1px; margin: 20px auto 20px auto;">
<tbody>
<tr class="tabela-new-venda" style="height: 40px;">
	<th style="width:400px; background: #bcbcbc; -moz-border-radius: 6px 0px 0px 0px; -webkit-border-radius: 6px 0px 0px 0px;">Colaborador</th>	
	<th style="width:100px; background: #bcbcbc;">Telefone</th>
	<th style="width:80px; background: #bcbcbc;">Empresa</th>
	<th style="width:80px; background: #bcbcbc;">Setor</th>
	<th style="width:80px; background: #bcbcbc;">Email</th>
	<th style="width:80px; background: #bcbcbc;">Cargo</th>

	
</tr>
<?php	
    while($ln = mysqli_fetch_array($result)){ ?>
<tr style="height: 36px;">
	<td style="text-align: left; border-left:1px solid #bcbcbc; border-bottom:1px solid #bcbcbc; padding: 0px 0px 0px 5px;"><?php echo $ln['Col_Nome'];?></td>
	
	<td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Telefone'];?></td>
	<td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Empresa'];?></td>
	<td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Setor'];?></td>
	<td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Email'];?></td>
	<td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Cargo'];?></td>
	<td style="text-align: center; border-right:1px solid #bcbcbc; border-bottom:1px solid #bcbcbc;">
		
	</td>
</tr>
		<?php 
		} ?>
		</tbody>
</table>
<?php
	}
?>