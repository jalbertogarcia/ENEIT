<?php 
require("../conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/estilos2.css">
	<title></title>
	<script>
	function showList() {
		ev=document.frmEvaluadores.evaluador.value; 
		eq=document.frmEvaluadores.equipo.value;  
		
    if (ev.length == 0 || eq.length == 0) { 
        document.getElementById("Lista").innerHTML = "";
		
        return;
    } else { 
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("equipos").innerHTML = xmlhttp.responseText;
				
            }
        };
		
        xmlhttp.open("GET", "procesarEquipo.php?p="+ ev+"&i="+eq, true);
		 xmlhttp.send();
		//document.getElementById("Lista").innerHTML = xmlhttp.responseText;
       
    }
}
</script>
</head>
<body>
<div id="general">
	 <div id="info">
	 	<h5 align="center">Elija al evaluador registrado y el equipo al que desea agregarlo.</h5>
	 </div>

	 <form id="frmEvaluadores" name="frmEvaluadores" method="post">

	 <p><b>Evaluadores</b></p>
     <table border="1">
     	<tr>
     		<td id="eval">Evaluador:</td>
     		<td id="eval">
     	    <select name="evaluador" id="evaluador">
         	 <?php
   $sql = "SELECT * FROM usuario WHERE tipo='Evaluador'";
   $result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<option value= ".$row["id_Usuario"].">" .$row['nombre']." ".$row['ApellidoP']." ".$row['ApellidoM']."</option>";
	}
}
else {
    echo "Ocurrió algún error :(";
}
?>   
                 </select>
     		</td>
     	</tr>
     	<tr> <td id="eval">Equipo:</td>
     	     <td id="eval"> <select name="equipo" id="equipo">
             <option value="Equipo1" >No. 1</option>
             <option value="Equipo2" >No. 2</option>
             <option value="Equipo3" >No. 3</option>
                 </select>
                 </td>
     	</tr>
     	<tr> <td id="eval"> </td>
     	     <td id="eval"><a href="javascript:showList()"> Registrar<a>  </td>
     	</tr>
      </table>
	 </form>

<div id="equipos">
	 	<p><b>Equipos</b></p> <br>
	 <table border="1" id="eq1">
	 <tr>
	 	<th>Equipo 1.</th>
        <th colspan="3"></th>

	 </tr>
	 	<tr>
	 		<td id="num">No.</td>
	 		<td id="nom">Nombre</td>
	 		<td id="tit">Título</td>
	 		<td id="esp">Especialidad</td>
	 	</tr>
	 </table>

	 <table border="1" id="eq2">
	 <tr>
	 	<th>Equipo 2.</th>
        <th colspan="3"></th>

	 </tr>
	 	<tr>
	 		<td id="num">No.</td>
	 		<td id="nom">Nombre</td>
	 		<td id="tit">Título</td>
	 		<td id="esp">Especialidad</td>
	 	</tr>
	 </table>

	 <table border="1" id="eq3">
	 <tr>
	 	<th>Equipo 3.</th>
        <th colspan="3"></th>

	 </tr>
	 	<tr>
	 		<td id="num">No.</td>
	 		<td id="nom">Nombre</td>
	 		<td id="tit">Título</td>
	 		<td id="esp">Especialidad</td>
	 	</tr>
	 </table>
	 		 
	 </div>
	 <div id="info_proyecto">
	 	<p><b>Proyectos</b></p> <br>
	 <table border="1" id="pro1">
	 <tr>
	 	<th>Proyecto 1.</th>
        <th colspan="3"></th>

	 </tr>
	 	<tr>
	 		<td id="nomP">Nombre</td>
	 		<td id="cat">Categoria</td>
	 		<td id="eqEv">Equipo evaluador <input type="submit" value="Asignar" id="asignar"></td>
	 		
	 	</tr>
	 </table>
	 		 
	 </div>

	  
</div>
</body>
</html>