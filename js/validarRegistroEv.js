3function validar(){
	var nombre, correo, numTelefonico, especialidad, titulo, institucion;
	nombre= document.getElementById("nombre").value;
	correo= document.getElementById("correo").value;
	numTelefonico= document.getElementById("numTelefonico").value;
	select= document.getElementById("especialidad").selectIndex;
	titulo= document.getElementById("titulo").value;
	institucion= document.getElementById("institucion").value;
	
    expresion = /\w+@\w+\.+[a-z]/;
    expresion1 = /[0-9]/;
	
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
	else if(numTelefonico.length>10){
		alert ("El telefono es muy largo");
		return false;
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
	else if (!isNaN(numTelefonico)){
		alert("El telefono esta muy largo ");
		return false;
	}
}