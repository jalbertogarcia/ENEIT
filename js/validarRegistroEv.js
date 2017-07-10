function validar(){
	var nombre, correo, numTelefonico, especialidad, titulo, institucion;
	nombre= document.getElementById("nombre").value;
	correo= document.getElementById("correo").value;
	numTelefonico= document.getElementById("numTelefonico").value;
	especialidad= document.getElementById("especialidad").value;
	titulo= document.getElementById("titulo").value;
	institucion= document.getElementById("institucion").value;
	
    expresion = /\w+@\w+\.+[a-z]/;
	
	if(nombre === "" || correo === "" || numTelefonico === "" || especialidad === "" || titulo === "" || institucion === "" ||){
		alert("El campo nombre está vacio");
		return false;
	}

	else if(nombre.length>30){
		alert ("El nombre es muy largo");
	}
	else if(correo.length>100){
		alert ("El correo es muy largo");
	}
	else if(!expresion.test(correo)){
		alert ("El correono es valido");
	}
	else if(numTelefonico.length>30){
		alert ("El telefono es muy largo");
	}
	else if(especialidad.length>30){
		alert ("Elige");
	}
	else if(titulo.length>30){
		alert ("Elige");
	}
	else if(institucion.length>30){
		alert ("Elige");
	}
	else if(isNaN(numTelefonico)){
       alert("No estas ingresando numeros en el telefono");
       return false;
	}
}