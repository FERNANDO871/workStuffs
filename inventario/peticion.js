$(obtener_registros());

function obtener_registros(inventario)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'php',
		data : { inventario: inventario },
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
