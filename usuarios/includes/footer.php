



   <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/utilidades.js"></script>



    
  <!-- DataTables -->
<script src="views/plugins/datatables/jquery.dataTables.js"></script>
<script src="views/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $().dropdown('toggle');
    </script>


<script>	
function preguntar(id_aud){
	if(confirm('Desea eliminar el Dato ?'))
	{
        window.location.href = "borrar.php?id_aud="+id_aud;
	}
} 
</script>
</body>
</html>