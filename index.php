<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//require ("verifica_login.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
      <meta charset="UTF-8"/>
        <title>.:: SCC ::.</title>
        <link href="_css/menu_adm.css" media="screen" rel="stylesheet"/>
         <link href="_css/iconic.css" media="screen" rel="stylesheet" />
        <link rel="stylesheet" href="_css/estilo.css"/>

        <link rel="stylesheet" href="_css/form.css" />
		
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
/*DIALOG JQUERY*/
.popupJquery input.text { margin-bottom:12px; width:95%; padding: .4em; }
.popupJquery { padding:0; border:0; margin-top:25px; }
.validateTips{margin: 0px 0px 0px 0px;}
/* FIM DIALOG JQUERY*/
</style>
		
<script type="text/javascript">
$(document).ready(function(){
    $('#select').SelectCustomizer();
});
</script>   
        
    </head>



 <body>
   <div id="interface">
 
      
        <header id="cabecalho">
          <hgroup>
            <h1><image src="_imagens/fundo.png" /> </h1>
            <h2><image src="_imagens/fundo.png" /> </h2>
			
			<div style="float: left; margin: 10px 0px 0px 20px; font-size:110%; font-family: Times New Roman; color: #757575;">
			<strong>Sistema de Controles de Colaboradores da Digiboard</strong>
            </div>
          </hgroup>

    <nav id="menu">
       
		<ul class="menu">
                    <li><a href="index.php"></span> Home </a></li>
                    
                    <li><a href="index.php?p=cad">Colaborador</a></li>
					
                    <li><a href="index.php?p=cont"></span>Gráficos</a></li>

                    <li><a href="index.php?p=cont"></span> Contatos</a></li>
			
				
                      
                    <li><a href="deslogar.php">Sair</a></li>
                       			
		</ul>
		
		<div class="clearfix"></div>
	</nav>
          
    </header>	
	<section id="corpo-full" style="position: relative;">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h1><image src="_imagens/fundo.png" /></h1>
<?php
include "conexao.php";
include "pagina.php";
?>
                </hgroup>
            </header>
        </article>
    </section>
			
     <footer id="rodape">
          <p>Copyright Romualdo &copy; 2020        
          </p>
       </footer>
       
   </div>
 </body>
</html>