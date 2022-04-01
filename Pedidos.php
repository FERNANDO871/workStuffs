<?php session_start();
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'tiendaozonium';
//$port = '33065';
$ipermiso=$_SESSION['tipo'];
$sonaHoraria = date_default_timezone_set("America/Chihuahua");

$hoy = date("H:i:s"); 

$data = mysqli_connect($server, $username, $password, $db/*, $port*/);

if ($ipermiso == 3 or $ipermiso == 4 or $ipermiso == 5 or $ipermiso == 6) 

{

if ($ipermiso ==3 )
{

$carrito_pedidos = "SELECT p. id, p. Fecha, p. idClt, p. Estatus, p. Cantidad, p. Numero, p. serie, p. folio, c. email FROM pedido p inner join cliente c on p. IdClt = c. id ";
$return_pedidos=mysqli_query($data,$carrito_pedidos);


$tabla=
'
<table class="table table-hover" id="tablausuario" >
                          <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>USUARIO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                 ';

             while($row2 =mysqli_fetch_array($return_pedidos)){ 

                $TotalForm = number_format($row2[4], 2);

                            if ($row2['Estatus'] == 1) {
                                $estatus="Verificacion";

                                $bton= ' <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes('. $row2[0].')"><span>Next</span></a>
                                                        </td>';
                            }
                            if ($row2['Estatus'] == 2) {
                                $estatus="Facturacion";
                                $bton= ' <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes2('. $row2[0].')"><span>Next</span></a>
                                                        </td>';
                            }
                            if ($row2['Estatus'] == 3) {
                                $estatus="Almacen";
                                $bton= ' <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes3('. $row2[0].')"><span>Next</span></a>
                                                        </td>';
                            }
                            if ($row2['Estatus'] == 4) {
                                $estatus="En Recoleccion";
                                $bton= ' <td>
                                                        </td>';
                            }
                            if ($row2['Estatus'] == 5) {
                                $estatus="Enviado";
                                $bton= ' <td>
                                                        </td>';
                            }



                           $tabla.='
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">'.$row2[6].'-'.$row2[7].'</a></td>
                                                        <td>'.$row2[8].'</td>
                                                        <td>'.$row2[1].'</td>
                                                        <td>'.$estatus.'</td>
                                                        <td>$ '.$TotalForm.' </td>
                                                       '.$bton.'
                                                    </tr>
                                                  
              ';                    
              }

               $tabla.='
                        </tbody>
                  </table>';







}

if ($ipermiso ==4 )
{
  // TESORERIA //

$carrito_pedidos = "SELECT p. id, p. Fecha, p. idClt, p. Estatus, p. Cantidad, p. Numero, p. serie, p. folio, c. email FROM pedido p inner join cliente c on p. IdClt = c. id where p. Estatus = 1";
$return_pedidos=mysqli_query($data,$carrito_pedidos);

$tabla=
'
<table class="table table-hover" id="tablausuario" >
                          <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>USUARIO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTATUS</th>
                                                        <th>COMPROBANTE</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                 ';

             while($row2 =mysqli_fetch_array($return_pedidos)){ 

                $TotalForm = number_format($row2[4], 2);




                           $tabla.='
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">'.$row2[6].'-'.$row2[7].'</a></td>
                                                        <td>'.$row2[8].'</td>
                                                        <td>'.$row2[1].'</td>
                                                        <td>Verificacion</td>
                                                        <td><input type="file" id="arccompro" lang="es" name="arccompro"></td>
                                                        
                                                        <td>$ '.$TotalForm.' </td>
                                                       <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes('. $row2[0].')"><span>Next</span></a>
                                                        </td>
                                                    </tr>
                                                  
              ';                    
              }

               $tabla.='
                        </tbody>
                  </table>';

}

if ($ipermiso ==5 )
{
  // ALMACEN //

$carrito_pedidos = "SELECT p. id, p. Fecha, p. idClt, p. Estatus, p. Cantidad, p. Numero, p. serie, p. folio, c. email FROM pedido p inner join cliente c on p. IdClt = c. id where p. Estatus BETWEEN 3 AND 6";
$return_pedidos=mysqli_query($data,$carrito_pedidos);

$tabla=
'
<table class="table table-hover" id="tablausuario" >
                          <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>USUARIO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                 ';

             while($row2 =mysqli_fetch_array($return_pedidos)){ 

                $TotalForm = number_format($row2[4], 2);

                            if ($row2['Estatus'] == 3) {
                                $estatus="Almacen";
                                $bton= ' <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes3('. $row2[0].')"><span>Next</span></a>
                                                        </td>';
                            }
                            if ($row2['Estatus'] == 4) {
                                $estatus="En Recoleccion";
                                $bton= '<td><a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes3('. $row2[0].')"><span>Next</span></a>
                                                        </td>  ';
                            }
                            if ($row2['Estatus'] == 5) {
                                $estatus="Enviado";
                                $bton= ' <td>
                                                        </td>';
                            }



                           $tabla.='
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">'.$row2[6].'-'.$row2[7].'</a></td>
                                                        <td>'.$row2[8].'</td>
                                                        <td>'.$row2[1].'</td>
                                                        <td>'.$estatus.'</td>
                                                        <td>$ '.$TotalForm.' </td>
                                                       '.$bton.'
                                                    </tr>
                                                  
              ';                    
              }

               $tabla.='
                        </tbody>
                  </table>';

}
if ($ipermiso ==6)
{

// FACTURACION //
$carrito_pedidos = "SELECT p. id, p. Fecha, p. idClt, p. Estatus, p. Cantidad, p. Numero, p. serie, p. folio, c. email FROM pedido p inner join cliente c on p. IdClt = c. id where p. Estatus = 2";
$return_pedidos=mysqli_query($data,$carrito_pedidos);

$tabla=
'
<table class="table table-hover" id="tablausuario" >
                          <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>USUARIO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTATUS</th>
                                                        <th>FACTURA</th>
                                                        <th>GUIA</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                 ';

             while($row2 =mysqli_fetch_array($return_pedidos)){ 

                $TotalForm = number_format($row2[4], 2);
                            
// FACTURACION //
$factura_id = "SELECT * FROM facturasid where idP = $row2[0]";
$return_factura=mysqli_query($data,$factura_id);

$fac =mysqli_fetch_array($return_factura);

if (!$fac[0]) {
 $facturacion = '<span onclick="idpedido('. $row2[0].')" style="cursor:pointer"><i class="lastudioicon-e-add"></i></span>';
 $f=0;
}
else
{
$facturacion = '<span onclick="idpedido('. $row2[0].')" style="cursor:pointer"><i class="lastudioicon-g-check"></i></span>';
 $f=1;
}
// guia //
$guias_id = "SELECT * FROM guiasid where idP = $row2[0]";
$return_guia=mysqli_query($data,$guias_id);

$gi =mysqli_fetch_array($return_guia);

if (!$gi[0]) {
 $guiaas = '<span onclick="idpedido('. $row2[0].')" style="cursor:pointer"><i class="lastudioicon-e-add"></i></span>';
 $g=0;
}
else
{
$guiaas = '<span onclick="idpedido('. $row2[0].')" style="cursor:pointer"><i class="lastudioicon-g-check"></i></span>';
$g=1;
}

$sumaFG= $f + $g;

if ($sumaFG == 2) {
  $siguiente='<a href="javascript:void(0)" class="yena-btn yena-btn_sm" onclick="cambioes2('. $row2[0].')"><span>Next</span></a>';
}
else
{
 $siguiente= "";
}


                           $tabla.='
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">'.$row2[6].'-'.$row2[7].'</a></td>
                                                        <td>'.$row2[8].'</td>
                                                        <td>'.$row2[1].'</td>
                                                        <td>Facturacion</td>
                                                        <td style="text-align: center;">
                                                        '.$facturacion.' 
                                                        </td>
                                                        <td> 
                                                        '.$guiaas.'
                                                        </td>
                                                        <td>$ '.$TotalForm.' </td>
                                                       <td>
                                                        '.$siguiente.'
                                                        </td>
                                                    </tr>
                                                  
              ';                    
              }

               $tabla.='
                        </tbody>
                  </table>';

}

}
else
{
header('Location: index.php');

}


mysqli_query($data, "SET NAMES 'UTF8'");





require 'views/Pedidos.views.php';	
?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#save').click(function(){
       

       $('#modalcupon').modal('show')
            }); 
    });
</script>


<script type="text/javascript">
  
function idpedido(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'php/mostrarpedido.php'
  })
  .done(function(listas_rep){
    
     $('#idinf').html(listas_rep)
     $('#modalpedidos').modal('show')
  });
}
</script>
<script type="text/javascript">
  
function cambioes(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'procesos/cambiopedido.php'
  })
  .done(function(listas_rep){
    
     location.reload();

  });
}
</script>
<script type="text/javascript">
  
function cambioes2(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'procesos/cambiopedido2.php'
  })
  .done(function(listas_rep){
    
     location.reload();

  });
}
</script>
<script type="text/javascript">
  
function cambioes3(idM){
  $.ajax({
    type: 'POST',
    data: 'idM=' + idM,
    url: 'procesos/cambiopedido3.php'
  })
  .done(function(listas_rep){
    
     location.reload();

  });
}
</script>

<script type="text/javascript">

   $(document).ready(function(){

    var frm = $("#formEtapa4");
    var btnEnviar= $("#form4_btn");

    var textosubir = btnEnviar.text();
    var textoSubiendo='<i class="fa fa-spinner fa-spin fa-3x fa-fw></i>';

    frm.bind("submit", function(){

      var archivoid = $('#idfilef').val()


if (idGuia == 0) 
{
  $("#msjetapa4").html("<div  style='color: #fb0000; font-size: 13px; '>FAVOR DE CARGAR GUIA</div>");
}
else
{
var frmData = new FormData($("#formEtapa4")[0]);
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
}

return false;
    });
 });
</script>

 <script>
  $(function () {
    $("#tablausuario").DataTable({
      language:{
      url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json'
    },
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    })
    $("#tablacupones").DataTable({
      language:{
      url: '//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json'
    },
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
   
  });

 
</script>
