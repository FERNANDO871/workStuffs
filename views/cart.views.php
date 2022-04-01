<?php 
include "header.php"; 
 ?>
        <!-- Main Header Area End Here -->

        <!-- Begin Yena's Breadcrumb Area -->
        <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Carrito</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Yena's Breadcrumb Area End Here -->




                        
        <!-- Begin Yena's Cart Area -->
        <div class="yena-cart-area" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="javascript:void(0)" id="formcarrito">
                            <div class="table-content table-responsive" id="carritoid">


             
                            
                                <table id="datable" class="table">
                                    <thead>
                                        <tr>
                                             <th class="yena-product_remove"></th>
                                             <th class="yena-product-subtotal"></th> 
                                          <!--  <th class="yena-product_remove">Imagen</th> -->
                                            <th class="yena-product-thumbnail">Nombre Producto</th>
                                            <th class="cart-product-name">Precio</th>
                                            <th class="yena-product-price">Cantidad</th>
                                            <th class="primary-img" style="width: 100px; 
                                            height:100px; ">Total</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody> 
                        <?php   


                        while($row = mysqli_fetch_row($return_cart)) 

                        { 
                            $preciodata = $row[4];

                            

                            $sumax = $row[4] * $row[2];

                            $Total[]=$sumax;



                            



$carrito_cart_cupon = "SELECT c. id, c. idCupon, p. descuento, p. num FROM carrito c 
INNER JOIN cupones p on c. IdCupon = p. Id
where c. Estatus = 1 and c. IdClt = $idcliente";
$return_cart_cupon=mysqli_query($data,$carrito_cart_cupon);

$row2 = mysqli_fetch_row($return_cart_cupon);



                            if ($row[5] == 0) {


                                $precio="";
                                $precioid = number_format($preciodata,2);

                                $suma = number_format($sumax,2);
                                $suma1="";

                                $totalA =array_sum($Total);
                                $totalreal=$totalA;
                                $TotalForm = number_format($totalA, 2);
                                $TotalForm2="";
                            }


                            else {


       
                                $sumapor = $preciodata * $row2[2];

                                $sumaporcentaje= $preciodata - $sumapor ;

                                $precio = number_format($sumaporcentaje,2);

                                $precioid2 = number_format($preciodata,2);
                                $precioid="<del style='color:red'> $precioid2</del><br>";

                                $sumatotal = $sumax * $row2[2];

                                $sumaporcentajetotal= $sumax - $sumatotal ;
                                $suma2 = number_format($sumax,2);
                                
                                $suma = number_format($sumaporcentajetotal,2);

                                $suma1="$ <del style='color:red'> $suma2</del> <br>";

                                $totalA =array_sum($Total);

                                $totaldes = $totalA * $row2[2];

                                 $sumaporcentajetotales= $totalA - $totaldes ;


                                 $des= $totalA - $sumaporcentajetotales;

                                 $totalreal= $totalA - $des;

                                $TotalForm3 = number_format($des, 2);

                                $TotalForm1 = number_format($totalreal, 2);

                                $TotalForm=" $ $TotalForm1";


                                $TotalForm2="

                                <li>Descuento <span> $row2[3]% <del style='color:red'>  $ $TotalForm3</del></span></li>";
                            }



                            ?>
          
                                        <tr>
                                            <td class="yena-product_remove"><a href="javascript:void(0)">
                                                <i class="lastudioicon-e-remove"
                                                title="Remove"></i></a></td>


                                           <td class="yena-product-thumbnail"><a href="javascript:void(0)"><img src="assets/images/product/small-size/1.jpg" alt="Yena's Cart Thumbnail"></a></td>
                                            <td class="yena-product-name" >
                                                <?php echo $row[3]; ?>
                                                <input type="hidden" name="txtidp[]" value="<?php echo $row[0]; ?>">
                                                <a href="javascript:void(0)">

                                               
                                                
                                            </a></td>
                                            <td class="yena-product-price" >
                                                <span class="amount">
                                                $ <?php echo $precioid; ?> $ <?php echo $precio; ?>  </span></td>
                                            <td class="quantity" >
                                                <div class="row">
                                                    
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" 
                                                    value="<?php echo $row[2]; ?>" type="text"  name="txtcan[]">
                                                    <div class="dec qtybutton"><i class="lastudioicon-down-arrow"></i></div>
                                                   
                                                    <div class="inc qtybutton"><i class="lastudioicon-up-arrow"></i></div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                </div>
                                            </td>
                                            
                                            <td class="product-subtotal" width="25%" >
                                                <span class="amount"><?php echo $suma1; ?> $ <?php echo $suma; ?></span>
                                            
                                            </td>
                                              
                                        </tr>
                                 <?php } ?>

                                  

                                    </tbody>
                                </table>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="txtidcupon" class="input-text" name="txtidcupon"  value="" placeholder="Codigo de Cupon" type="text">
                                            <input class="button mt-xxs-30" id="txtcliente" name="txtcliente" value="Aplicar Cupon" type="submit" onclick="Agregarcupon(<?php echo $idcliente?>)">


                                            <div id="idmensaje"></div>
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="Agregarid" id="Agregarid" value="Actualizar Carrito" type="submit" >
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Carrito Total</h2>
                                        <ul>
                                           
                                            <?php echo $TotalForm2 ?>
                                            <li>Total <span><?php echo $TotalForm ?>  <input type="hidden" name="idtotal" id="idtotal" value="<?php echo $totalreal ?>"></span></li>
                                        </ul>
                                        <a href="#" onclick="procesarpedido(<?php echo $idcliente?>)">Procesar Pedido</a>
                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
  
        <!-- Yena's Cart Area End Here -->


        <!-- Begin Footer Area -->
<?php include ("footer.php"); ?>