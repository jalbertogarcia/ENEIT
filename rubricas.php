<?php 
require("conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/rubrica.css">
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<title></title>
	<script>
	function showList() {
		ev=document.frmRu.equipo.value; 
		eq=document.frmRu.rubrica.value;  
		
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
	 	<h5 align="center">Seleccionar Rubrica.</h5>
	 </div>

	 <form id="frmRu" name="frmRu" method="post" action="rubi.php" onsubmit="return valida();" enctype="multipart/form-data">


    <table border ="1">

	<tr>
		<td>Cargar Rubricas</td>
		<td id="cargar"> <input id="rubricass" name="rubricass"type="file" requiered></td>
	</tr>


    <tr>
            <td colspan="2"><center><input type="submit" value="enviar" id="enviar" name="subir" > </center> </td>
            </tr>
   </table>




	 <p><b>Asignar rubrica</b></p>
     <table border="1">


     	<tr>
     		<td id="eval">Elije Equipo:</td>
     		<td id="eval">
     	    <select name="id_Equipo" id="id_Equipo">
         	 <?php
   $sql = "SELECT * FROM equipo ";
   $result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<option value= ".$row["id_Equipo"].">" .$row['nombre']."</option>";
	}
}
else {
    echo "Ocurrió algún error :(";
}
?>   
                 </select>
     		</td>
     	</tr>
     	     	<tr>
     		<td id="eval">Elije Rubrica:</td>
     		<td id="eval">
     	    <select name="id_Documentacion" id="id_Documentacion">
         	 <?php
   $sql = "SELECT * FROM documentacion ";
   $result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<option value= ".$row["id_Documentacion"].">" .$row['Documentacion']."</option>";
        echo getcwd();
	}
}
else {
    echo "Ocurrió algún error :(";
}
?>   
                 </select>
     		</td>
     	</tr>
     	
      </table>

      <tr>
            <td colspan="2"><center><input type="submit" value="Guardar" id="Guardar" name="Guardar" > </center> </td>
            </tr>
	 </form>

<!--<div id="equipos">
	 	
	
	 </table>-->

	 	 		 
	 </div>
	
</body>
</html>