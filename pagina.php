<?php

	if(isset($_GET['p']) ){
			switch($_GET['p']){
			
				default: 
				
					include "cadastro.php";
					break;
					
				case 'cad':
				
					include "cadastro.php";
					break;
					
				case 'coor':
				
					include "coordenador.php";
					break;
				
				case 'cont':
				
					include "grafico.php";
					break;
				
				case 'dese':
				
					include "desenvolvedores.php";
					break;
				
				case 'ajud':
				
					include "ajuda.php";
					break;
					
				case 'ativ':
				
					include "atividades.php";
					break;
                
				case 'atal':
				
					include "atividade_aluno.php";
					break;

				case 'alat':
				
					include "aluno_atividade.php";
					break;	
			}
	}
	
	else{ 
		include "home.php";
			}

?>