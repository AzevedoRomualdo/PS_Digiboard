<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<button id="create-user" style="position: absolute; top: 20px; left: 50px;" title="Cadastrar Colaborador" class="ui-button ui-widget ui-corner-all" >Cadastrar Colaborador</button>

<script>
   $( function() {
    var dialog;
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 330,
      width: 520,
      modal: true,
      buttons: {
        Concluir: function() {
          $("#meuformdialog").submit();
        },
        Cancelar: function() {
          dialog.dialog( "close" );
        }
      },
    });
    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });	
  });
</script>
</head>
<body>
 
<div id="dialog-form" title="Cadastro Colaborador">
  <form method="post" action="funcoes/colaborador/inserir.php" id="meuformdialog">
    <fieldset class="popupJquery">
    <label>Nome do Colaborador</label>
	<input type="text" name="nome" maxlength="150"  class="text ui-widget-content ui-corner-all" >
	<label>Telefone</label>
	<input type="text" name="telefone" maxlength="8"  class="text ui-widget-content ui-corner-all" >
    <label>Empresa</label>
	<input type="text" name="empresa" maxlength="150"  class="text ui-widget-content ui-corner-all" >
    <label>Setor</label>
	<input type="text" name="setor" maxlength="150"  class="text ui-widget-content ui-corner-all" >
    <label>Email</label>
	<input type="text" name="email" maxlength="150"  class="text ui-widget-content ui-corner-all" >
    <label>Cargo</label>
    <select name="cargo" style="width: 450px; height: 34px; margin: 0px 0px 10px 0px;" class="text ui-widget-content ui-corner-all">
		<option value="1">CC01 – Gestor</option>
		<option value="2">CC02 – Consultor</option>
		<option value="3">CC03 – Vendedor</option>
	</select>


	
	
	</fieldset>
  </form>
</div>


</script>


<div style="margin: -20px auto 0px auto; width: 350px;">
<form action="index.php?p=cad=p" method="post">
<input style="width: 300px; height: 30px;" class="text ui-widget-content ui-corner-all" type="text" name="pesquisa" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<button type="submit" class="ui-button ui-widget ui-corner-all ui-button-icon-only" style="margin: -2px 0px 0px 0px;" title="Pesquisar"><span class="ui-icon ui-icon-search"></span>.</button>
</form>
</div>

<table style="border-spacing: 1px; margin: 0px auto 20px auto;" id="myTable">
<tbody>
<tr class="tabela-new-venda" style="height: 40px;">
	<th style="width:350px; background: #bcbcbc; -moz-border-radius: 6px 0px 0px 0px; -webkit-border-radius: 6px 0px 0px 0px;">Colaborador</th>	
	<th style="width:100px; background: #bcbcbc;">Empresa</th>
	<th style="width:250px; background: #bcbcbc;">Cargo</th>
  <th style="width:100px; background: #bcbcbc;">Setor</th>
	<th style="width:250px; background: #bcbcbc;">Email</th>
  <th style="width:250px; background: #bcbcbc;">Telefone</th>
	<th style="width:150px; background: #bcbcbc; -moz-border-radius: 0px 6px 0px 0px; -webkit-border-radius: 0px 6px 0px 0px;">Ações</th>
</tr>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//include "../../verifica_login.php";


if (isset($_GET['busca'])=='p'){//verifica se existe a variavel $_GET['busca']. Se ela existir, o botão de busca da pagina foi acionado
 
$sql = "SELECT * FROM tab_colaborador WHERE Col_Nome like '%".$_POST['pesquisa']."%' order by Col_Nome ASC";
$result = mysqli_query($conn, $sql);
  
}else{
	$sql = "SELECT * FROM tab_colaborador order by Col_Nome ASC";
  $result = mysqli_query($conn, $sql);
}

while ($ln = mysqli_fetch_array($result)){ ?>
  
  	

  <tr style="height: 36px;">
    <td style="text-align: left; border-left:1px solid #bcbcbc; border-bottom:1px solid #bcbcbc; padding: 0px 0px 0px 5px;"><?php echo $ln['Col_Nome'];?></td>
    <td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Empresa'];?></td>
   
    <td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php if($ln['Col_Cargo'] == 1){echo "Gestor";}if($ln['Col_Cargo'] == 2){echo "Consultor";}if($ln['Col_Cargo'] == 3){echo "Vendedor";}?></td>
    <td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Setor'];?></td>
    <td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Email'];?></td>
    <td style="text-align: center; border-bottom:1px solid #bcbcbc;"><?php echo $ln['Col_Telefone'];?></td>
    
    
	<td style="text-align: center; border-right:1px solid #bcbcbc; border-bottom:1px solid #bcbcbc;">
		
		<button id="create-userEdi<?php echo $ln['Id_Colaborador'];?>" title="Editar" class="ui-button ui-widget ui-corner-all ui-button-icon-only" ><span class="ui-icon ui-icon-pencil"></span>.</button>
		<button id="del-user<?php echo $ln['Id_Colaborador'];?>" title="Excluir" class="ui-button ui-widget ui-corner-all ui-button-icon-only" ><span class="ui-icon ui-icon-close"></span>.</button>
	</td>
    
  </tr>

  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
              var match = tr[i].innerHTML.toUpperCase().indexOf(filter) > -1;
              tr[i].style.display = match ? "table-row" : "none";
          }

  //td = table.getElementsByTagName("td");



  // Loop through all table rows, and hide those who don't match the search query

} </script>

  <!--####################################################################-->
<!--EDITAR-->
<script>
   $( function() {
    var dialog;
 
    dialog = $( "#dialog-formEdi<?php echo $ln['Id_Colaborador'];?>" ).dialog({
      autoOpen: false,
      height: 400,
      width: 400,
      modal: true,
      buttons: {
        Concluir: function() {
          $("#meuformdialogEdi<?php echo $ln['Id_Colaborador'];?>").submit();
        },
        Cancelar: function() {
          dialog.dialog( "close" );
        }
      },
    });
    $( "#create-userEdi<?php echo $ln['Id_Colaborador'];?>" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });	
  });
</script>
<!--##POPUP##-->
<!---->
<div id="dialog-formEdi<?php echo $ln['Id_Colaborador'];?>" title="Editar">
  <form method="post" action="funcoes/colaborador/editar.php" id="meuformdialogEdi<?php echo $ln['Id_Colaborador'];?>">
    <fieldset class="popupJquery">
    <label>Nome do Colaborador</label>
	<input type="text" name="nome" maxlength="150"  class="text ui-widget-content ui-corner-all" value="<?php echo $ln['Col_Nome'];?>">
	<label>Telefone</label>
	<input type="text" name="telefone" maxlength="8"  class="text ui-widget-content ui-corner-all" value="<?php echo $ln['Col_Telefone'];?>">
  <label>Empresa</label>
	<input type="text" name="empresa" maxlength="150"  class="text ui-widget-content ui-corner-all" value="<?php echo $ln['Col_Empresa'];?>">
  <label>Setor</label>
	<input type="text" name="setor" maxlength="150"  class="text ui-widget-content ui-corner-all" value="<?php echo $ln['Col_Setor'];?>">
  <label>Email</label>
	<input type="text" name="email" maxlength="150"  class="text ui-widget-content ui-corner-all" value="<?php echo $ln['Col_Email'];?>">
  <select name="cargo" style="width: 450px; height: 34px; margin: 0px 0px 10px 0px;" class="text ui-widget-content ui-corner-all">
		<option value="1" <?php if($ln['Col_Cargo'] == 1){echo "selected";}?>>Gestor</option>
		<option value="2" <?php if($ln['Col_Cargo'] == 2){echo "selected";}?>>Consultor</option>
		<option value="3" <?php if($ln['Col_Cargo'] == 3){echo "selected";}?>>Vendedor</option>
	</select>
	
	
	<input type="text" name="cod" style="display: none;" value="<?php echo $ln['Id_Colaborador'];?>">
	</fieldset>
	
  </form>
  
</div>
<!--##FIM POPUP##-->
<!--FIM EDITAR-->

  <!--EXCLUSÃO-->
<script>
   $( function() {
    var dialog;
 
    dialog = $( "#dialog-formDel<?php echo $ln['Id_Colaborador'];?>" ).dialog({
      autoOpen: false,
      height: 180,
      width: 400,
      modal: true,
      buttons: {
        Sim: function() {
          $("#meuformdialogDel<?php echo $ln['Id_Colaborador'];?>").submit();
        },
        Não: function() {
          dialog.dialog( "close" );
        }
      },
    });
    $( "#del-user<?php echo $ln['Id_Colaborador'];?>" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });	
  });
</script>
<!--##POPUP##-->
<!---->
<div id="dialog-formDel<?php echo $ln['Id_Colaborador'];?>" title="Excluir">
  <form method="post" action="funcoes/colaborador/excluir.php" id="meuformdialogDel<?php echo $ln['Id_Colaborador'];?>">
	<p style="margin: 5px;">Deseja realmente excluir esse colaborador?</p>
    <input type="text" name="cod" style="display: none;" value="<?php echo $ln['Id_Colaborador'];?>">
  </form>
</div>

 <!--FIM DA EXCLUSÃO-->

<?Php }
?>