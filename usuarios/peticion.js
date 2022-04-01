$(obtener_registros());

function obtener_registros(cliente)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'php',
		data : { cliente: cliente },
		})

	.done(function(resultado){
		$("#tabla_resultado").php(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
