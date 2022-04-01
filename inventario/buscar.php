<?php
 include ("db.php");

?>
   <input type="text" name="buscador" id="buscador" placeholder="Buscar..."> 


			<script>
				$(document).ready(function(){
  				$("#buscador").on("keyup", function() {
   			    var value = $(this).val().toLowerCase();
    			$("#buscarT").filter(function() {
     			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   			 });
  		});
	});
</script>
