jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'login.php',
		type:'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
         $('.botonlg').val('Iniciando...');
		}
	})
	.done(function(respuesta){
		console.log(respuesta);

		if (!respuesta.error) {
			if (respuesta.status==NULL) {
				location.href= 'RespuestaEvaluador.html';
			} else{
			 if(respuesta.tipo=='Coordinador') {
				location.href= 'Coordinador.php';
				
              	

			}else if (respuesta.tipo=='Evaluador') {
               
               Location.href='evaluador.php';}
     }
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
               $('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
    .always(function(){
    	console.log("complete");
    });
});
