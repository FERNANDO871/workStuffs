<?php 
include "header.php"; 
 ?>
        <!-- Main Header Area End Here -->

        <!-- Begin Yena's Breadcrumb Area -->
        <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Registro Pedido</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Pedido</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Yena's Breadcrumb Area End Here -->

        <!-- Begin Yena's Checkout Area -->
        <div class="checkout-area">
            <div class="container-fluid">
               <!-- <div class="row">
                    <div class="col-12">
                        <div class="coupon-accordion">
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                        sit amet ipsum luctus.</p>
                                    <form action="javascript:void(0)">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Remember me</label>
                                        </p>
                                        <p class="lost-password"><a href="javascript:void(0)">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="javascript:void(0)">
                                        <p class="checkout-coupon">
                                            <input placeholder="Coupon code" type="text">
                                            <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <form action="javascript:void(0)">
                            <div class="checkbox-form">
                                <h3>Detalles de Envio</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label>Pais <span class="required">*</span></label>
                                            <select class="myniceselect nice-select wide">
                                                <option value="1" >Mexico</option>
                                                <option value="2">Estados Unidos</option>
                                                <option value="3">Cuba</option>
                                                <option value="4">Costa Rica</option>
                                                <option value="5">Colombia</option>
                                                <option value="6">Peru</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Nombre (s) <span class="required">*</span></label>
                                            <input id="nombre" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Apellido (s) <span class="required">*</span></label>
                                            <input id="apellido" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nombre Compañia</label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Direccion <span class="required">*</span></label>
                                            <input id="derreccion" placeholder="Street address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Localidad / Ciudad <span class="required">*</span></label>
                                            <input id="cuidad" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Estado / Condado <span class="required">*</span></label>
                                            <input id="estado" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Codigo Postal <span class="required">*</span></label>
                                            <input id="codigo_postal" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email  <span class="required">*</span></label>
                                            <input id="correo" placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input id="telefono" id="telefono" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <!--  <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox">
                                            <label for="cbox">Create an account?</label>
                                        </div>

                                        <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div> 

                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>-->
                                    </div>
                                </div>
                                <div class="order-notes">
                                        <div class="checkout-form-list checkout-form-list-2">
                                            <label>Notas </label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notas sobre su pedido, p. Notas especiales para la entrega."></textarea>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Pedido # <?php echo $row2[6] ?> -  <?php echo $row2[7] ?></h3>
                            <input type="hidden" id="folio" value=<?php echo  $row2[7] ?> >
                            <input type="hidden" id="id_pedido" value=<?php echo  $row2[0] ?> >
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                            × 1</strong></td>
                                            <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                            × 1</strong></td>
                                            <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="cart-product-name totalEnviaYA"> </td>
                                            <td class="cart-product-total totalEnviaYA"><span class="amount"></span></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                            × 1</strong></td>
                                            <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                        </tr>
                                        <tr class="cart_item hidden" id="muestraEnviaYa">
                                            <td class="cart-product-name enviaYaTotal"></td>
                                            <td class="cart-product-total enviaYaTotal"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount" >£215.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">$ <span id="toTAL"><?php echo $TotalForm  ?></span></span></strong> 
            <!-- enviar el monto a payment.php -->
                                        
                                                <input type="hidden" id="monto" name="monto" value =  <?php echo $TotalForm  ?> ></input>
                                         
                                            
            <!-- enviar el monto a payment.php -->                            
                                        
                                        </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
        <!-- aqui se inserta los valores de envia ya que regresa la api -->
        <div id="enviaYA" class="hidden">
        <table class="table">
        <thead>
                    <tr>
                        <th class="cart-product-name">Package</th>
                        <th class="cart-product-total">Total shipment</th>
                        <th class="cart-product-total">delivery date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart_item" id="fedex">
                        <td class="cart-product-name enviaYaImagen"> </td>
                        <td class="cart-product-total"><span class="amount preciosEnviaYA"></span></td>
                        <td class="cart-product-total"><span class="amount dateEnviaYA"></span></td>
                        <td class="cart-product-total"><input class="form-check-input" type="radio" value="fedex" name="paqueteria[paqueteria]"> </td>

                    </tr>
                    <tr class="cart_item" id="ups">
                        <td class="cart-product-name enviaYaImagen"> </td>
                        <td class="cart-product-total"><span class="amount preciosEnviaYA"></span></td>
                        <td class="cart-product-total"><span class="amount dateEnviaYA"></span></td>
                        <td class="cart-product-total"><input class="form-check-input" type="radio" value="ups" name="paqueteria[paqueteria]"></td>
                    </tr>
                </tbody>
            </table>
            <P class="shipmentMessegue amount card-product-total"> up to 900 MXN the shipment is free!</P>
        </div>
        <!-- aqui se inserta los valores de envia ya que regresa la api -->
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="#payment-1">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Direct Bank Transfer.
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="#payment-2">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Cheque Payment
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="#payment-3">
                                                <h5 class="panel-title">
                                                    <a href="javascript:void(0)" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        PayPal
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                                <div class="card-body">
                                                    <p>Make your payment directly into our bank account. Please use your Order
                                                        ID as the payment
                                                        reference. Your order won’t be shipped until the funds have cleared in
                                                        our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!-- eleccion de metodo de pago --> 
<p class="p-3 mb-2 bg-dark text-white text-right" >payment</p>
<div class="container">
  <div class="row">
    <div class="col">
                        <h6 class="shipmentMessegue amount card-product-total">if you need invoice please fill the form on 
                        <a href="http://localhost/tiendaweb/my-account.php">my account</a> </h6>
    </div>
    <div class="col col-4">
                       <input class="form-check-input" type="checkbox" value='true' id="flexCheckDefault">
                        <label class="form-check-label shipmentMessegue" for="flexCheckDefault">
                            do you need invoice?
                        </label>
    </div>
  </div>
  <div class="row">
    <div class="col">
 
                    <input class="form-check-input" type="radio" value="oxxo" name="pago[pago]">
                    <label class="form-check-label" for="flexRadioDefault1">oxxo</label> 
    </div>
    <div class="col">
                    <input class="form-check-input" type="radio" value="card" name="pago[pago]">
                    <label class="form-check-label" for="flexRadioDefault1">card</label>
    </div>
    <div class="col">
                    <input class="form-check-input" type="radio" value="paypal" name="pago[pago]">
                    <label class="form-check-label" for="flexRadioDefault1">paypal</label>
    </div>
  </div>
</div>
<div class="container">


     <!-- api de stripe                          -->
     <form id="payment-form" >
            <div id="payment-element">
             <!--Stripe.js injects the Payment Element-->
            </div>
            <button id="submit">
                <div class="spinner hidden" id="spinner"></div>
                <span id="button-text">Pay now</span>
            </button>
            <div id="payment-message" class="hidden"></div>
            <div id="mensaje" ></div>
        </form>
        <!-- api de stripe                          -->  
        <!-- paypal form   -->
        <div class="hidden" id="paypal1417" ></div>
    <!-- paypal form   -->


                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Yena's Checkout Area End Here -->

        <!-- Begin Footer Area -->
        <div class="footer-area border-top">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-widgets_area text-center p-0">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/1.png" alt="Footer Logo">
                                    </a>
                                </div>
                                <p class="short-desc font-style_italic">
                                    Yena is the place where everyone can is able to find some beauty called to highlight one’s individuality! We are waiting right for you!
                                </p>
                                <div class="social-link">
                                    <ul>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://vimeo.com/" data-bs-toggle="tooltip" target="_blank" title="Vimeo">
                                                <i class="bi bi-cast"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-3 col-sm-4">
                                    <div class="footer-widgets_area">
                                        <div class="footer-widgets">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)"><span>About Us</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Help Center</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Licenses</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Licenses</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Site Map</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="footer-widgets_area">
                                        <div class="footer-widgets">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)"><span>The Collections</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Makeup Tutorial</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Beauty Inspiration</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Look Book</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <div class="footer-widgets_area">
                                        <div class="footer-widgets">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Makeup</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Skin Care</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Hair Care</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Foot, Hand & Nail Care</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="footer-widgets_area">
                                        <div class="footer-widgets">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)"><span>Monday - Friday: 9:00 - 19:00</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span class="text-lowercase">info@example.com</span></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)"><span>(+612) 2531 5600</span></a>
                                                </li>
                                                <li class="line-height-1">
                                                    <a href="javascript:void(0)"><span>PO Box 1622 Colins Street West Victoria 8077 Australia</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area bg-bokara_grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span>&copy; 2021
                                <a href="index.html">Yena.</a>
                                <a href="https://hasthemes.com/" target="_blank">Designed By HasTech.</a>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-footerbar">
                <ul>
                    <li>
                        <a href="login-register.html">
                            <i class="bi bi-circle-half"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#searchBar" class="search-btn toolbar-btn">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="with-counter">
                        <a href="wishlist.html">
                            <i class="bi bi-suit-heart-fill"></i>
                            <span class="cart-item_count">3</span>
                        </a>
                    </li>
                    <li class="with-counter">
                        <a href="compare.html">
                            <i class="bi bi-flower3"></i>
                            <span class="cart-item_count">3</span>
                        </a>
                    </li>
                    <li class="minicart-wrap with-counter">
                        <a href="#miniCart" class="minicart-btn toolbar-btn position-relative">
                            <div class="minicart-count_area">
                                <i class="bi bi-bag-heart-fill"></i>
                                <span class="cart-item_count">3</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="bi bi-chevron-compact-up"></i></a>
        <!-- Scroll To Top End -->

    </div>
    

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <!-- Timecircles JS -->
    <script src="assets/js/plugins/timecircles.min.js"></script>
    <!-- Jarallax JS -->
    <script src="assets/js/plugins/jarallax.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/plugins/wow.min.js"></script>
    <!-- svg Inject JS -->
    <script src="assets/js/plugins/svg-inject.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- lightgallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <!-- imagesloaded JS -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->

    <!-- agregar el libreria javaScript de stripe -->
    <script src="https://js.stripe.com/v3/"></script>


    <!-- agregarel sdk de paypal es importante que vaya atras de paymen.js para cargar el sdk primero  -->
    <script src="https://www.paypal.com/sdk/js?client-id=AVLUjIrc04f6LHgo1Z8nW5PO3i-a6o7xH-a2NiJ9i-Lmm7LAoTm-iqswfoFUyk224YjL4k2l6EKyhbQs&currency=MXN"></script>


    <!-- agregar el javaScript del pago stripe -->
    <script src="views/payment/payment.js"></script>
    <script src="views/payment/jquery-2.1.4.js"></script>

    <!-- variables de java a php -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- conectarse con anviaYa -->
    <script src="views/enviaYa/enviaYa.js"></script>
    <!-- conectarse con anviaYa -->


</body>

</html>