<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_digiboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


  $sql1 = "SELECT * FROM tab_colaborador Where Col_Cargo = 1 ";
  $result1 = mysqli_query($conn, $sql1);
  $rows1 = mysqli_num_rows($result1);
  $sql2 = "SELECT * FROM tab_colaborador Where Col_Cargo = 2 ";
  $result2 = mysqli_query($conn, $sql2);
  $rows2 = mysqli_num_rows($result2);
  $sql3 = "SELECT * FROM tab_colaborador Where Col_Cargo = 3 ";
  $result3 = mysqli_query($conn, $sql3);
  $rows3 = mysqli_num_rows($result3);
 
?>

<div align="center">

<canvas  id="canvas" width="300" height="300"></canvas>

</div>
<table id="mydata">      
 <thead> 
  <tr>
    <th>Cargo</th>
    <th>Quantidade</th> 
  </tr>
 </thead>

 <tbody>    
  <tr>
    <td>Gestor</td>  
    <td><?php echo $rows1;?></td>
  </tr>      
  <tr>
    <td>Vendedor</td>  
    <td><?php echo $rows2;?></td>  
  </tr>      
  <tr>
    <td>Consultor</td>  
    <td><?php echo $rows3;?></td>  
  </tr>      

 </tbody>  
</table>

<script>
// a tabela e o elemento canvas na marcação HTML   
var data_table = document.getElementById('mydata');  
var canvas = document.getElementById('canvas');  
var td_index = 1; // qual td comtém os dados

var tds, data = [], color, colors = [], value = 0, total = 0;  
var trs = data_table.getElementsByTagName('tr'); // todas as tr's   
for (var i = 0; i < trs.length; i++) {      
tds = trs[i].getElementsByTagName('td'); // todas as td's
         
if (tds.length === 0) continue; //  não há td's, vá em frente
         
// extrair o valor da td e atualizar o total       
value  = parseFloat(tds[td_index].innerHTML);      
data[data.length] = value;      
total += value;
        
// cor randômica       
color = getColor();      
colors[colors.length] = color; // armazena       
trs[i].style.backgroundColor = color; // colorir a tr   
}

// estabelecer contexto e definir raio e centro   
var ctx = canvas.getContext('2d');  
var canvas_size = [canvas.width, canvas.height];  
var radius = Math.min(canvas_size[0], canvas_size[1]) / 2;  
var center = [canvas_size[0]/2, canvas_size[1]/2];

var sofar = 0; // monitora o andamento do script   
// loop por data[]   
for (var piece in data) {        
var thisvalue = data[piece] / total;        
ctx.beginPath();      
ctx.moveTo(center[0], center[1]); 
// centro do gráfico       
ctx.arc(  // desenha próximo arco           
center[0],          
center[1],          
radius,         
 Math.PI * (- 0.5 + 2 * sofar), // -0.5 define o início no topo           
Math.PI * (- 0.5 + 2 * (sofar + thisvalue)),          false      );        
ctx.lineTo(center[0], center[1]); // linha de retorno ao centro      
 ctx.closePath();      
ctx.fillStyle = colors[piece];    // cor       
ctx.fill();        
sofar += thisvalue; // incrementa o andamento do script   
}


// gera uma cor randômica       
function getColor() {          
var rgb = [];          
for (var i = 0; i < 3; i++) {              
rgb[i] = Math.round(100 * Math.random() + 155) ; // [155-255] = lighter colors           
}          
return 'rgb(' + rgb.join(',') + ')';      
}

</script>