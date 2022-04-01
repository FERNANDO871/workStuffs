<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idp= $_POST["idM"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM inventario where id = $idp ";
$result_E=$mysqli->query($query_E);


$mostrar_P=mysqli_fetch_row($result_E);



                  $listas='<table id="datable" class="table">
                                    <thead>
                                        <tr>
                                             <th class="yena-product_remove"></th>
                                          <!--  <th class="yena-product_remove">Imagen</th> -->
                                            <th class="yena-product-thumbnail">Nombre Producto</th>
                                            <th class="cart-product-name">Precio</th>
                                            <th class="yena-product-price">Cantidad</th>
                                            <th class="primary-img" style="width: 100px; 
                                            height:100px; ">Imagen</th>
                                         <!--   <th class="yena-product-remove"></th>-->
                                             <th class="yena-product-subtotal"></th> 
                                        </tr>
                                    </thead>
                                    <tbody>

          
                                        <tr>
                                            <td class="yena-product_remove"><a href="javascript:void(0)">
                                                <i class="lastudioicon-e-remove"
                                                title="Remove"></i></a></td>

                                          <!--  <td class="yena-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/1.jpg" ></a></td>-->
                                            <td class="yena-product-name">
                                               
                                                <a href="javascript:void(0)">

                                               
                                                
                                            </a></td>
                                            <td class="yena-product-price">
                                                <span class="amount">
                                                </span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" 
                                                    value="1" type="text">
                                                    <div class="dec qtybutton"><i class="lastudioicon-down-arrow"></i></div>
                                                   
                                                    <div class="inc qtybutton"><i class="lastudioicon-up-arrow"></i></div>
                                                </div>
                                            </td>
                                            <td> 

                                          <img class="primary-img" src="data:image/jpg;base64," 
                                          alt="Image Product"/> 

                                            </td>
                                            <td class="product-subtotal"><span class="amount"></span></td>
                                              
                                        </tr>
                                 

                                    <!--  <tr>
                                            <td class="yena-product_remove"><a href="javascript:void(0)"><i class="lastudioicon-e-remove"
                                                title="Remove"></i></a></td>
                                            <td class="yena-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/2.jpg" ></a></td>
                                            <td class="yena-product-name"><a href="javascript:void(0)">Bag Goodscol model</a></td>
                                            <td class="yena-product-price"><span class="amount">$71.80</span></td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" 
                                                    type="text">
                                                    <div class="dec qtybutton"><i class="lastudioicon-down-arrow"></i></div>
                                                    <div class="inc qtybutton"><i class="lastudioicon-up-arrow"></i></div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$71.80</span></td>
                                        </tr> -->


                                    </tbody>
                                </table>

';
  
  return $listas;

}

echo gettabla();
?>
<script type="text/javascript">

   $(document).ready(function(){
    
   $('#btncancelar').click(function(){


  
 location.reload();



     });
 });


</script>

<script type="text/javascript">

   $(document).ready(function(){
    
   $('#addpais').click(function(){

productos=$('#paisid').serialize();

 $.ajax({
    type: 'POST',
   data:  productos,
    url: 'php/procesarpais.php'
  })
  .done(function(listas_rep){
    $('#paisid').html(listas_rep)
   
    
  });
  


     });
 });

</script>

<script>
  $(function () {
    $("#example1").DataTable({
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
    $("#example4").DataTable({
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
    $('#example6').DataTable({
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

                  
