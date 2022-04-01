<?php 
require_once 'conexion.php';

function gettabla(){
  $mysqli = getConn();

$idp= $_POST["idM"];

 $fechaActual =date("Y-m-d");


$query_E= "SELECT * FROM inventario where id = $idp ";
$result_E=$mysqli->query($query_E);


$mostrar_P=mysqli_fetch_row($result_E);



                  $listas='

                            <div class="col-xl-5 col-lg-6">
                                <div class="product-details_img">
                                    <div class="product-details_slider slick-img-slider yena-element-carousel" >
                                     <div class="single-img zoom">
                                            <img src="assets/images/product/medium-size/'.$mostrar_P[8].'" alt="Yenas Product Image">
                                            <span class="sticker">New</span>
                                        </div>
                                        
                                    </div>

                                
                                </div>
                            </div>
                                    
                             
                                     <div class="col-xl-6 col-lg-5">
                                <div class="product-details_content">
                                    <h3 class="heading text-uppercase mb-0">'.$mostrar_P[4].'</h3>
                                    <div class="essential-stuff">
                                        <div class="price-box">
                                            <span class="new-price ms-0">$30.00</span>
                                        </div>
                                    </div>
                                    <p class="short-desc mb-0">In elit risus, volutpat sed vestibulum sit amet, bibendum in lorem. Etiam aliquet
                                        convallis nibh at tempus. Proin gravida tincidunt egestas. Curabitur porta nibh ac enim semper, vitae pretium
                                        ante sollicitudin.</p>
                                    <div class="product-size">
                                        <span>Size</span>
                                        <select class="nice-select wide">
                                            <option value="1">Choose an option</option>
                                            <option value="l">L</option>
                                            <option value="m">M</option>
                                            <option value="s">S</option>
                                            <option value="x">X</option>
                                            <option value="xl">XL</option>
                                            <option value="xxl">XXL</option>
                                        </select>
                                    </div>
                                    <div class="product-size product-color">
                                        <span>Color</span>
                                        <select class="nice-select wide">
                                            <option value="1">Choose an option</option>
                                            <option value="2">Blue</option>
                                            <option value="3">Brown</option>
                                            <option value="4">Gray</option>
                                            <option value="5">Green</option>
                                            <option value="6">Orange</option>
                                            <option value="7">Purple</option>
                                            <option value="8">Red</option>
                                            <option value="9">Yellow</option>
                                        </select>
                                    </div>
                                    <div class="quantity-with_btn">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">

                                                <input class="cart-plus-minus-box" value="1" type="number">
                                                
                                            </div>
                                        </div>
                                        <div class="add-to_cart">
                                            <a class="yena-btn sorbus-color" href="javascript:void(0)">Add to cart</a>
                                        </div>
                                    </div>
                                    <ul class="additional-btn">
                                        <li>
                                            <a href="javascript:void(0)"><i class="lastudioicon-heart-2"></i> Add to wishlist</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="lastudioicon-compare"></i> Add to compare</a>
                                        </li>
                                    </ul>
                                    <div class="sku">
                                        <span>SKU: LA123</span>
                                    </div>
                                    <ul class="categories">
                                        <li>Categories: </li>
                                        <li>
                                            <a href="javascript:void(0)">Foot, Hand & Nail Care,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Fragrance,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Hair Care,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Makeup,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Skin Care</a>
                                        </li>
                                    </ul>
                                    <ul class="categories tags">
                                        <li>Tags: </li>
                                        <li>
                                            <a href="javascript:void(0)">Beauty,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Beauty01,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Cosmetic,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Skin solution,</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Skincare</a>
                                        </li>
                                    </ul>
                                    <div class="social-link with-color with-radius">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="lastudioicon-b-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="lastudioicon-b-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="lastudioicon-b-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="https://vimeo.com/" data-bs-toggle="tooltip" target="_blank" title="Vimeo">
                                                    <i class="lastudioicon-b-vimeo"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>   
                                </div>
                            </div>

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

                  
