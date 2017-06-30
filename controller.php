<?php

	//array de correos 
	$emails = $_POST['correos'];


	// obtengo el cantidad de valores que vienen por post
	//para la condicion de un ciclo
	//el ciclo se repetira ejecutando la funcion enviarEmail
	//cambiando unicamente el parametro de email
	$numeroEmails = count($emails); 
	echo "Correos Enviados " . $numeroEmails;

	for ($i=0; $i < $numeroEmails ; $i++) { 
		enviarEmail($emails[$i]);
	}


	function enviarEmail($destino){
		$asunto = "comentario de prueba";

		
		
		$headers = 'From: '.$destino."\r\n".
			'Reply-To:'.$destino."\r\n".
			'X-Mailer: PHP/'.phpversion();
		mail($destino, $asunto,  $headers);

		echo "<br/><strong>Invitacion enviada a " . $destino . "</strong> <br> ";

	}

?>