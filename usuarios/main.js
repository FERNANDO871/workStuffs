function buscar_datos(consulta){
	$.ajax({
		url: 'buscar.php',
		type: 'POST',
		dataType: 'php',
		data: {consulta:consulta},
	})
	.done(fuction(respuesta){
		$('#datos').html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
}

$.(document).on('keyup', '#caja_busqueda', function(){
	var valor = $(this).val();
		if (valor != '') {
				buscar_datos(valor);
		} else {
			buscar_datos();
		}
});