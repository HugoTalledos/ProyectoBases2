function crear() {
	var url="/ProyectoBases2/Logica/Entidades/Cargo.php"
	var nombre = document.getElementById("nombreCargo").value;
	var salario = document.getElementById("salario").value;
	var info="opcion=crear&name=" + nombre + "&salario=" + salario;
	var xhr = new XMLHttpRequest();
	xhr.open("POST",url,true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			alert(xhr.responseText);
		}
	};
	xhr.send(info);
}

function editar(){
	var url="/ProyectoBases2/Logica/Entidades/Cargo.php"
	var nombre= document.getElementById("nombreCargo").value;
	var nuevoNombre= document.getElementById("nuevoCargo").value;
	var salario= document.getElementById("salario").value;
	var info="opcion=editar&name="+nombre+"&newNombre="+nuevoNombre+"&salario="+salario;
	var xhr = new XMLHttpRequest();
	xhr.open("POST",url,true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			alert(xhr.responseText);
		}
	};
	xhr.send(info);
}