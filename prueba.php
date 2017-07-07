  <?php include_once "menu/m_principal.php"; ?>
	<div align="center">
    	<?php 
			if(!empty($_POST['con'])){
				$con=limpiar($_POST['con']);
				$n1=limpiar($_POST['n1']);
				$n2=limpiar($_POST['n2']);
				
				if($n1==$n2){
					
					$can=mysql_query("SELECT * FROM profesor WHERE doc='$usu' and con='$con'"); 
					if($dato=mysql_fetch_array($can)){
						mysql_query("UPDATE profesor SET con='$n2' WHERE doc='$usu'");
						echo mensajes('Contraseña Cambiada Con Exito','verde');
					}else{
						echo mensajes('La Contraseña Antigua Digitada no es Correcta, Vuelva a Intentarlo','rojo');
					}
				}else{
					echo mensajes('Debe de Confirmar Correctamente la Nueva Contraseña Digitada','rojo');
				}
			}
		
		?>