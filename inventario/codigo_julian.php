[9:42, 15/12/2021] Julian(Ozonium): 

<script type="text/javascript">

   $(document).ready(function(){
    var frm = $("#formE5");

    var btnEnviar= $("#form1_b");
    
    var textosubir = btnEnviar.text();
    var textoSubiendo='<i class="fa fa-spinner fa-spin fa-3x fa-fw></i>';
    frm.bind("submit", function(){

var frmData = new FormData($("#formE5")[0]);

     $.ajax
     ({
      url: frm.attr("action"),
      type: frm.attr("method"),
      data: frmData,
      processData: false,
      contentType: false,
      cache: false,
      beforeSend:function(data){
        btnEnviar.html(textoSubiendo);
        btnEnviar.attr("disable",true);
      },
      success: function(data){
        btnEnviar.html(textosubir);
        btnEnviar.attr("disable",false);
       location.reload();

      } 

     });
return false;
    });
   
 });
 

</script>
[9:43, 15/12/2021] Julian(Ozonium): <form id="formE5" action="subir5.php" method ="POST" role="form" enctype="multipart/form-data">
[9:48, 15/12/2021] Julian(Ozonium): <?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);


 if (!$conexion) {
 header('Location: error.php');
 
 }

$nombreA  ="Contrato";
$comentariof  = $_POST['textarea'];
$idpros = $_POST['txtid'];


 $obj= new conectar();


$conexion=$obj->conexion();


$ruta_carpeta="archivos/".$idpros;

$fechaActual =date("Y-m-d");

if (!file_exists($ruta_carpeta) )
{

	mkdir($ruta_carpeta, 0777, true);

}





$nombrefoto ="Contrato".$idpros.".".pathinfo($_FILES["contrato"]["name"],PATHINFO_EXTENSION);


$sql_f= "SELECT * FROM archivos WHERE nombre = 
      '$nombrefoto' and idP = $idpros";

$result_f=mysqli_query($conexion,$sql_f); 

$mostrar=mysqli_fetch_row($result_f);


if (!$mostrar[0]) {
	$nombre_archivo = $nombrefoto;
}
else
{

$idpros2= $idpros;

$nombre_archivo = $nombrefoto=$nombreA.$idpros.".".pathinfo($_FILES["contrato"]["name"],PATHINFO_EXTENSION);
}

 $extencion=pathinfo($_FILES["contrato"]["name"],PATHINFO_EXTENSION);

$ruta_guardar_archivo = $ruta_carpeta ."/". $nombre_archivo;


if (move_uploaded_file($_FILES["contrato"]["tmp_name"],$ruta_guardar_archivo)) {



$sql= "INSERT INTO  `archivos` (`idP`,`nombre`,`comentario`, `archivo`, `extencion`) VALUES (
      '$idpros',
      '$nombreA',
      '$comentariof',
      '$nombre_archivo',
       '$extencion'
  )";

$result=mysqli_query($conexion,$sql);
$sql_C= "SELECT id, idB, tipo FROM prospectos WHERE id = 
      '$idpros'";

$result_C=mysqli_query($conexion,$sql_C); 

$mostrar_C=mysqli_fetch_row($result_C);

if ($mostrar_C[2] == 1) {
$sql_1= "INSERT INTO  `comprador` (`idP`, `idB`) VALUES (
      '$mostrar_C[0]',
      '$mostrar_C[1]')";

$result_1=mysqli_query($conexion,$sql_1); 

$sql_6= "UPDATE `prospectos` SET
 `etapa`='6',
  fechaetapa5 = '$fechaActual' WHERE  `id`='$mostrar_C[0]';";

$result_6=mysqli_query($conexion,$sql_6); 
}
if ($mostrar_C[2] == 2) {
$sql_1= "INSERT INTO  `productor` (`idP`, `idB`) VALUES (
      '$mostrar_C[0]',
      '$mostrar_C[1]')";

$result_1=mysqli_query($conexion,$sql_1); 
$sql_6= "UPDATE `prospectos` SET `etapa`='6', fechaetapa5 = '$fechaActual' WHERE  `id`='$mostrar_C[0]';";

$result_6=mysqli_query($conexion,$sql_6); 
}





} 

else
{
   echo "No se pudo Guardar";
}






?>