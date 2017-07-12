<?php 
require("../conexion.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf8">
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

function showListP() {
        pro=document.frmProyectos.proyectos.value; 
        ep=document.frmProyectos.equipoP.value;  
        
    if (pro.length == 0 || ep.length == 0) { 
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
                document.getElementById("info_proyecto").innerHTML = xmlhttp.responseText;
                
            }
        };
        
        xmlhttp.open("GET", "procesarEquipoProyecto.php?p="+ pro+"&i="+ep, true);
         xmlhttp.send();
        //document.getElementById("Lista").innerHTML = xmlhttp.responseText;
       
    }
}
function quitarInt(id_platillo_ingrediente) {
        
        
    if (pl.length == 0 || ing.length == 0 || Npor.length==0) { 
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
                document.getElementById("ListaIngredientes").innerHTML = xmlhttp.responseText;
                
            }
        };
        
        xmlhttp.open("GET", "QuitarIngrediente.php?id="+id_platillo_ingrediente, true);
         xmlhttp.send();
        
       
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
     <table border="0">
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
     	     <td id="eval"> 
     	     <select name="equipo" id="equipo">
     	      <?php
           $equi = "SELECT * FROM equipo";
           $bus = $mysqli->query($equi);
           if ($bus->num_rows > 0) {
    // output data of each row
	while($fila = $bus->fetch_assoc()) {
		echo "<option value= ".$fila["id_Equipo"].">" .$fila['nombre']."</option>";
	}
}
else {
    echo "Ocurrió algún error :(";
}
?>   
            
                 </select>
                 </td>
     	</tr>
     	<tr> <td id="eval"> </td>
     	     <td id="eval"><a href="javascript:showList()"> <img  src="../img/reg.png" alt="Registrar" width="60" height="30" style="margin-left:60px;"><a>  </td>
     	</tr>
      </table>
	 </form>

<div id="equipos">
	 	<p><b>Equipos</b></p> <br>
	 	 		 
	 </div>
     
	
     <form id="frmProyectos" name="frmProyectos" method="post">
     <p><b>Proyectos</b></p> <br>
     <table border="1">
     <tr>
     <td>
     <select name="proyectos" id="proyectos">
             <?php
   $ins = "SELECT * FROM proyecto ";
   $arr = $mysqli->query($ins);

if ($arr->num_rows > 0) {
    // output data of each row
    while($campos = $arr->fetch_assoc()) {
        echo "<option value= ".$campos["id_Proyecto"].">" .$campos['nombrePro']."   ---->Categoria: ".$campos['categoria']." </option>";
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
<td>
<select name="equipoP" id="equipoP">
              <?php
           $equi = "SELECT * FROM equipo";
           $bus = $mysqli->query($equi);
           if ($bus->num_rows > 0) {
    // output data of each row
    while($fila = $bus->fetch_assoc()) {
        echo "<option value= ".$fila["id_Equipo"].">" .$fila['nombre']."</option>";
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
                 <td id="eval"><a href="javascript:showListP()"> <img  src="../img/reg.png" alt="Registrar" width="60" height="30" style="margin-left:60px;"><a>  </td>
                 </tr>
                 </table>
	 	
	 </form> 
     <div id="info_proyecto">
	 </div>
     	  
</div>
</body>
</html>