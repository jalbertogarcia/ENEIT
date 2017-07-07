<?php 
require("../conexion.php");

$resGen="SELECT nombrePro,usuario.nombre as evaluador, ApellidoP, ApellidoM, calificacion FROM proyecto,evaluacion,usuario WHERE proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario";
$resAp="SELECT nombrePro,usuario.nombre as evaluador, ApellidoP, ApellidoM, calificacion FROM proyecto,evaluacion,usuario WHERE calificacion>=70 AND proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario";
//"SELECT nombrePro,usuario.nombre as evaluador FROM proyecto,evaluacion,usuario WHERE proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario";
//SELECT nombrePro,usuario.nombre,nombreInt,ApellidoPaternoInt,ApellidoMaternoInt FROM proyecto,evaluacion,usuario,integrantes,integrantesproyecto WHERE proyecto.id_Proyecto=evaluacion.id_Proyecto AND evaluacion.id_Usuario=usuario.id_Usuario AND integrantes.id_Integrante=integrantesproyecto.id_Integrante
$con=$mysqli->query($resGen);
$ap=$mysqli->query($resAp);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="../css/w3.css">
</head>
<body>
<header>
	<div class="alert alert-info"></div>
</header>
<section>
	 <h2 class="w3-text-lime w3-hover-text-lime:hover" align="center"><b>Registro de proyectos que obtuvieron 70% o más</b></h2>

	 <table class="w3-table w3-striped w3-border">
	<tr class="w3-green">
		<th>Proyecto</th>
		<th>Evaluador</th>
		<th></th>
		<th></th>
		<th>Calificación</th>

	</tr>
	<?php 
	while ($resApro=$ap->fetch_array(MYSQLI_BOTH)) {
    echo'<tr>
    <td>'.$resApro['nombrePro'].'</td>
    <td>'.$resApro['evaluador'].'</td>
    <td>'.$resApro['ApellidoP'].'</td>
    <td>'.$resApro['ApellidoM'].'</td>
    <td>'.$resApro['calificacion'].'</td>
    </tr>';
	}
	 ?>
	 </table>

<a  href="resultados.php"><img  src="../img/back.png" alt="Volver" width="80" height="30" style="margin-left:60px; margin-top:50px"></a>
</section>
</body>
</html>