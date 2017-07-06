<?php 
require("../conexion.php");

$resGen="SELECT nombrePro,usuario.nombre as evaluador FROM proyecto,evaluacion,usuario WHERE proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario";
//SELECT nombrePro,usuario.nombre,nombreInt,ApellidoPaternoInt,ApellidoMaternoInt FROM proyecto,evaluacion,usuario,integrantes,integrantesproyecto WHERE proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario AND integrantes.id_Integrante=integrantesproyecto.id_Integrante
$con=$mysqli->query($resGen);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body>
<header>
	<div class="alert alert-info"></div>
	<h2 align="center">Registro de proyectos que obtuvieron un porcentaje mayor a 70 puntos</h2>
</header>
<section>
	<table class="tabel">
	<tr>
		<th>Proyecto</th>
		<th>Nombre de evaluador</th>

	</tr>
	<?php 
	while ($resTodo=$con->fetch_array(MYSQLI_BOTH)) {
    echo'<tr>
    <td>'.$resTodo['nombrePro'].'</td>
    <td>'.$resTodo['evaluador'].'</td>
    </tr>';
	}
	 ?>
	 </table>
</section>
</body>
</html>