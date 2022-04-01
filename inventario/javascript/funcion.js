
function busqueda(){

	var texto = document.getElementById("txtnom").value;

	var parametros = {
		"texto"  : texto

	};

	$.ajax({
		data: parametros,
		url: "ajax/valida.php",
		type: "POST",
		success: function(response){
			$("#datos").php(response);
		}

	})

}